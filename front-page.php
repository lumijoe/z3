<?php

/**
 * Template Name: Front Page
 * Description: This is the template for the front page.
 */

get_header();
?>
<main>
    <section class="l-hero">
        <div>
            <ul>
                <li><img src="./wp-content/uploads/assets/images/img_04.jpg" alt=""></li>
                <li><img src="./wp-content/uploads/assets/images/img_05.jpg" alt=""></li>
                <li><img src="./wp-content/uploads/assets/images/img_09.jpg" alt=""></li>
            </ul>
        </div>

    </section>
    <section class="l-hero2">
        <div>
            <ul class="slider">
                <li><img src="./wp-content/uploads/assets/images/img_04.jpg" alt=""></li>
                <li><img src="./wp-content/uploads/assets/images/img_05.jpg" alt=""></li>
                <li><img src="./wp-content/uploads/assets/images/img_09.jpg" alt=""></li>
            </ul>
        </div>

    </section>
    <section class="l-topics">
        <h2 class="h2-ttl--main">Topics</h2>
        <p class="h2-ttl--sub">トピックス</p>
        <div class="l-swiper">
            <ul>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_01.jpg" alt="" width="330" height="230">

                    </div>
                    <p class="l-topics--title">テキストが入りますテキストが入ります</p>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_02.jpg" alt="" width="330" height="230">
                        <p class="l-topics--title">テキストが入ります</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_03.jpg" alt="" width="330" height="230">
                        <p class="l-topics--title">テキストが入りますお知らせです</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_04.jpg" alt="" width="330" height="230">
                        <p class="l-topics--title">テキストが入りますテキストのお知らせです</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_05.jpg" alt="" width="330" height="230">
                        <p class="l-topics--title">テキストが入ります</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="l-news">
        <!-- STANDARD NEWS -->
        <div class=l-news-areawrapper>
            <div class="l-news--area">
                <div>
                    <h2 class="h2-ttl--main">News</h2>
                    <p class="h2-ttl--sub">ニュース</p>
                </div>
            </div>
            <ul class="l-news-lists">
                <!-- ▽組み込み -->
                <?php
                $args = array(
                    'post_type' => 'post_news',
                    'post_status' => 'publish',
                    'posts_per_page' => 5,
                    'tax_query' => array(
                        'relation' => 'AND', // すべての条件に一致する投稿を取得
                        array(
                            'taxonomy' => 'newstype', // タクソノミー名
                            'field' => 'slug', // スラッグで指定
                            'terms' => array('typestandard', 'typesustainability'), // 表示するターム
                            'operator' => 'IN',
                        ),
                        array(
                            'taxonomy' => 'newstag', // 別のタクソノミー名
                            'field' => 'slug',
                            'terms' => array('tagnews', 'tagsustainability', 'tagexhibition', 'tagtech'), // 表示するターム（必要に応じて変更）
                            'operator' => 'IN',
                        ),
                    ),
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <li>
                            <!-- 日時 -->
                            <p class="news-day">
                                <time class="c-news-date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                    <?php echo get_the_date('Y/m/d'); ?>
                                </time>
                            </p>
                            <!-- タクソノミー -->
                            <!-- <p class="l-news-label-txt">展示会</p> -->
                            <ul class="news-taxonomies" style="display: flex; flex-direction: row; gap:5px; flex-wrap: wrap;">
                                <?php
                                $taxonomies = ['newstag'];
                                foreach ($taxonomies as $taxonomy) {
                                    $terms = get_the_terms($post->ID, $taxonomy);
                                    if ($terms) :
                                        foreach ($terms as $term) :
                                ?>
                                            <li class="tax-term">
                                                <?php echo esc_html($term->name); ?>
                                            </li>
                                <?php
                                        endforeach;
                                    endif;
                                }
                                ?>
                            </ul>
                            <!-- ニュースタイトル -->
                            <!-- <p class="l-news-text">テキストが入ります</p> -->
                            <p class="c-pdl--s">
                                <?php
                                $news_title = get_field('news_title');
                                if ($news_title) :
                                    echo esc_html($news_title);
                                endif;
                                ?>
                            </p>
                        </li>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
                <!-- <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">サステナビリティ</p>
                    <p class="l-news-text">テキストが入りますテキストが入ります</p>
                </li>
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">お知らせ</p>
                    <p class="l-news-text">テキストが入りますテキストが入りますテキストが入ります</p>
                </li> -->
            </ul>
            <a href="<?php echo esc_url(home_url('/newslist-standard')); ?>" tabindex="0" class="btn--newsmore"><span style="font-style: italic;">NEWS</span>一覧へ</a>
        </div>
        <!-- IR NEWS -->
        <div class=l-news-areawrapper>
            <div class="l-news--area">
                <div>
                    <h2 class="h2-ttl--main">IR News</h2>
                    <p class="h2-ttl--sub">IRニュース</p>
                </div>
            </div>
            <ul class="l-news-lists">
                <!-- ▽組み込み -->
                <?php
                $args = array(
                    'post_type' => 'post_news',
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
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
                        <li>
                            <!-- 日時 -->
                            <p class="news-day">
                                <time class="c-news-date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                    <?php echo get_the_date('Y/m/d'); ?>
                                </time>
                            </p>
                            <!-- タクソノミー -->
                            <!-- <p class="l-news-label-txt">展示会</p> -->
                            <ul class="news-taxonomies" style="display: flex; flex-direction: row; gap:5px; flex-wrap: wrap;">
                                <?php
                                $taxonomies = ['newstag'];
                                foreach ($taxonomies as $taxonomy) {
                                    $terms = get_the_terms($post->ID, $taxonomy);
                                    if ($terms) :
                                        foreach ($terms as $term) :
                                ?>
                                            <li class="tax-term">
                                                <?php echo esc_html($term->name); ?>
                                            </li>
                                <?php
                                        endforeach;
                                    endif;
                                }
                                ?>
                            </ul>
                            <!-- ニュースタイトル -->
                            <!-- <p class="l-news-text">テキストが入ります</p> -->
                            <p class="c-pdl--s">
                                <?php
                                $news_title = get_field('news_title');
                                if ($news_title) :
                                    echo esc_html($news_title);
                                endif;
                                ?>
                            </p>
                        </li>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
                <!-- <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">サステナビリティ</p>
                    <p class="l-news-text">テキストが入りますテキストが入ります</p>
                </li>
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">お知らせ</p>
                    <p class="l-news-text">テキストが入りますテキストが入りますテキストが入ります</p>
                </li> -->
            </ul>
            <a href="<?php echo esc_url(home_url('/newslist-ir')); ?>" tabindex="0" class="btn--newsmore"><span style="font-style: italic;">IR NEWS</span>一覧へ</a>

        </div>
    </section>
    <section style="background-color: rgb(48, 56, 56); height: 350px;">three-strong </section>
    <section style="background-color: rgb(48, 56, 56); height: 350px;">img </section>
    <section style="background-color: rgb(99, 167, 167); height: 350px;">product </section>
</main>
<?php
get_footer(); // footer.php を読み込む
?>