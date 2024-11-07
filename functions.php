<!-- functions.php -->
<?php
function enqueue_custom_styles()
{
    $uri = get_template_directory_uri();

    // jQuery を読み込み（WordPress のデフォルト jQuery）
    wp_enqueue_script('jquery');

    // JavaScript（bundle.js）を読み込み、jQuery に依存し、フッターに出力
    wp_enqueue_script(
        'bundle_js',
        $uri . '/assets/js/bundle.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/bundle.js'), // キャッシュバスターを追加
        true // フッターに出力
    );

    // CSS（home.css）を読み込み
    wp_enqueue_style(
        'home-style',
        $uri . '/assets/scss/home.css',
        array(), // 依存関係なし
        filemtime(get_template_directory() . '/assets/scss/home.css') // キャッシュバスターを追加
    );

    // page-products01.php ページの場合に products.css を読み込む
    if (is_page_template('page-products01.php')) {
        wp_enqueue_style(
            'products-style',
            $uri . '/assets/scss/products.css',
            array(), // 依存関係なし
            filemtime(get_template_directory() . '/assets/scss/products.css') // キャッシュバスターを追加
        );
    }
}
// 
// ニュースのタブフィルタ
// 
add_action('wp_ajax_filter_news', 'filter_news');
add_action('wp_ajax_nopriv_filter_news', 'filter_news');

function filter_news() {
    $tag_slug = $_POST['tag_slug'];

    $args = array(
        'post_type' => 'post_news',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );

    if ($tag_slug != 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'newstag',
                'field' => 'slug',
                'terms' => $tag_slug,
            ),
        );
    }

    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
            ?>
            <li class="l-news-wrapper">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/img_01.jpg'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                <div class="l-news-wrapper--txt">
                    <div class="l-news-wrapper--txt-first">
                        <time class="c-news-date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                            <?php echo esc_html(get_the_date('Y/m/d')); ?>
                        </time>
                        <ul class="news-taxonomies" style="display: flex; flex-direction: row; gap:5px; flex-wrap: wrap;">
                            <?php
                            $terms = get_the_terms($post->ID, 'newstag');
                            if ($terms) :
                                foreach ($terms as $term) :
                                    ?>
                                    <li class="tax-term"><?php echo esc_html($term->name); ?></li>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </ul>
                    </div>
                    <div class="l-news-wrapper--txt-second">
                        <a href="<?php echo esc_url(get_permalink()); ?>">
                            <p class="c-pdl--s">
                                <?php
                                $news_title = get_field('news_title');
                                if ($news_title) :
                                    echo esc_html($news_title);
                                endif;
                                ?>
                            </p>
                        </a>
                    </div>
                </div>
            </li>
            <?php
        endwhile;
    else :
        echo '<li>該当するニュースはまだありません</li>';
    endif;
    wp_reset_postdata();
    wp_die();
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
?>