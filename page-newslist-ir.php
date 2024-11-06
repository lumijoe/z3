<!-- ニュースIR一覧ページ -->
<?php

/**
 * Template Name: newslist-ir
 * Description: This is the template
 */

get_header('product');
?>
<main>
    <div class="l-breadcrumbs c-pdlr--wide">
        <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
            <li><a href="<?php echo esc_url(home_url('/newslist-ir')); ?>">IRニュース（IR適時開示情報）</a></li>
        </ul>
    </div>
    <div class="l-title--page c-pdlr--wide">
        <h2 class="c-pagetitle-h2">IRニュース（IR適時開示情報）</h2>
    </div>
    <div class="l-image--page c-pdlr--wide">
        <div class="c-overlay-image--page"></div>
        <p class="c-imagetitle"><span class="c-imagetitle--l">IR N</span>ews</p>
    </div>
    <!-- news -->
    <section class="l-news c-malr--wide c-pdlr--morewide c-pdb--s">
        <div>
            <ul>
                <li class="w--105">IR</li>
            </ul>
        </div>
    </section>
    <section class="l-newslist">
        <ul>
            <!-- ▽組み込み -->
            <?php
            $args = array(
                'post_type' => 'post_news',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'tax_query' => array(
                    'relation' => 'AND', // すべての条件に一致する投稿を取得
                    array(
                        'taxonomy' => 'newstype', // タクソノミー名
                        'field' => 'slug', // スラッグで指定
                        'terms' => array('typeir'), // 表示するターム
                        'operator' => 'IN',
                    ),
                    array(
                        'taxonomy' => 'newstag', // 別のタクソノミー名
                        'field' => 'slug',
                        'terms' => array('tagir'), // 表示するターム（必要に応じて変更）
                        'operator' => 'IN',
                    ),
                ),
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                    <li class="l-news-wrapper">
                        <div class="l-news-wrapper--txt">
                            <div class="l-news-wrapper--txt-first">
                                <!-- リンク -->
                                <a href="<?php the_permalink(); ?>">
                                    <!-- 日時 -->
                                    <time class="c-news-date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                        <?php echo get_the_date('Y/m/d'); ?>
                                    </time>

                                    <!-- タクソノミー -->
                                    <ul class="news-taxonomies" style="display: flex; flex-direction: row; gap:5px; flex-wrap: wrap;">
                                        <?php
                                        $taxonomies = ['newstag']; // 
                                        foreach ($taxonomies as $taxonomy) {
                                            $terms = get_the_terms($post->ID, $taxonomy);
                                            if ($terms) :
                                                foreach ($terms as $term) :
                                        ?>
                                                    <li class="tax-term w--90">
                                                        <?php echo esc_html($term->name); ?>
                                                    </li>
                                        <?php
                                                endforeach;
                                            endif;
                                        }
                                        ?>
                                    </ul>

                                    <!-- ニュースタイトル -->
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
                wp_reset_postdata();
            endif;
            ?>
            <li class="l-news-wrapper">
                <div class="l-news-wrapper--txt">
                    <div class="l-news-wrapper--txt-first">
                        <p class="c-news-date">2024/09/06</p>
                        <ul>
                            <li class="w--90">IR</li>
                        </ul>
                        <p class="c-pdl--s">決議ご通知<span>（PDF：199KB）</span></p>
                    </div>
                </div>
            </li>
            <li class="l-news-wrapper">
                <div class="l-news-wrapper--txt">
                    <div class="l-news-wrapper--txt-first">
                        <p class="c-news-date">2024/09/06</p>
                        <ul>
                            <li class="w--90">IR</li>
                        </ul>
                        <p class="c-pdl--s">第82期 定時株主総会招集ご通知<span>（PDF：3.4MB）</span></p>
                    </div>
                </div>
            </li>
        </ul>
        <div class="l-pagenation">
            <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
            </ul>
        </div>
    </section>
    <!-- ここからSCFを利用したコード -->
    <h2 class="" style="font-size:clamp(16px, 2vw, 30px)!important;">News IR</h2>
    <section class="" id="">
        <ul class="" style="">

            <?php
            $args = array(
                'post_type' => 'post_news',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'tax_query' => array( // タクソノミーによるフィルタリング
                    'relation' => 'AND', // すべての条件に一致する投稿を取得
                    array(
                        'taxonomy' => 'newstype', // タクソノミー名
                        'field' => 'slug', // スラッグで指定
                        'terms' => array('typeir'), // 表示するターム
                        'operator' => 'IN', // 指定されたタームに一致する投稿のみ取得
                    ),
                ),
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                    <li class="">
                        <a class="" href="<?php the_permalink(); ?>">
                            <div class="" style="list-style-type: none;">

                                <!-- 施工名 -->
                                <h3 class="" style="font-size: 16px; display: flex; padding: 5px 0px;">
                                    <?php
                                    $news_title = get_field('news_title');
                                    if ($news_title) :
                                        echo esc_html($news_title);
                                    endif;
                                    ?>
                                </h3>
                                <!-- タクソノミー -->
                                <div style="display: flex; flex-wrap: wrap; gap: 5px; max-width: 300px;">
                                    <?php
                                    $taxonomies = ['tagir'];
                                    foreach ($taxonomies as $taxonomy) {
                                        $terms = get_the_terms($post->ID, $taxonomy);
                                        if ($terms) :
                                    ?>
                                            <ul class="" style="display: flex;  flex-direction: row; gap:5px; flex-wrap: wrap;">
                                                <?php
                                                foreach ($terms as $term) :
                                                ?>
                                                    <li style="padding: 2px 8px; border-radius: 10px; border: 1px solid #232323; width: max-content; font-size:12px;">
                                                        <?php echo esc_html($term->name); ?>
                                                    </li>
                                                <?php
                                                endforeach;
                                                ?>
                                            </ul>
                                    <?php
                                        endif;
                                    }
                                    ?>
                                </div>
                                <!-- ニュースタイトル -->
                                <p class="" style="font-size: 14px; display: flex; padding: 5px 0px;">
                                    <?php
                                    $news_text = get_field('news_text');
                                    if ($news_text) :
                                        echo esc_html($news_text);
                                    endif;
                                    ?>
                                </p>
                                <!-- ニュースファイル -->
                                <p class="" style="font-size: 14px; display: flex; padding: 5px 0px;">
                                    <?php
                                    $news_file = get_field('news_file');
                                    if ($news_file) :
                                        echo esc_html($news_file);
                                    endif;
                                    ?>
                                </p>

                            </div>
                        </a>
                    </li>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </ul>
    </section>





</main>
<!-- footer -->
<footer style="height: 400px; background-color: bisque;">
    <section style="background-color: aquamarine; height: 812px;">footer-first</section>
    <section style="background-color: rgb(255, 249, 127); height: 134px;">footer-second</section>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
<script>
    const maxLength = 30;
    const textOverM = document.querySelectorAll('.textoverm');
    textOverM.forEach((element) => {
        if (element.textContent.length > maxLength) {
            element.textContent = element.textContent.slice(0, maxLength) + '...';
        }
    });
</script>
</body>

</html>