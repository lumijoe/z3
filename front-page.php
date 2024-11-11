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
    <!-- <section class="l-hero2">
        <div>
            <ul class="slider">
                <li><img src="./wp-content/uploads/assets/images/img_04.jpg" alt=""></li>
                <li><img src="./wp-content/uploads/assets/images/img_05.jpg" alt=""></li>
                <li><img src="./wp-content/uploads/assets/images/img_09.jpg" alt=""></li>
            </ul>
        </div>

    </section> -->
    <section class="l-topics">
        <h2 class="h2-ttl--main">Topics</h2>
        <p class="h2-ttl--sub">トピックス</p>
        <div class="l-swiper">
            <ul>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_01.jpg" alt="" width="230" height="160">
                        <p class="l-topics--title">開発バーナ2025年販売開始</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_02.jpg" alt="" width="230" height="160">
                        <p class="l-topics--title">2025春産業フェアに出展</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_03.jpg" alt="" width="230" height="160">
                        <p class="l-topics--title">製品を〇〇会社に提供</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_04.jpg" alt="" width="230" height="160">
                        <p class="l-topics--title">海外提携パートナー情報を更新</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_05.jpg" alt="" width="230" height="160">
                        <p class="l-topics--title">採用情報を更新</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_01.jpg" alt="" width="230" height="160">
                        <p class="l-topics--title">開発バーナ2025年販売開始</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_02.jpg" alt="" width="230" height="160">
                        <p class="l-topics--title">2025春産業フェアに出展</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_03.jpg" alt="" width="230" height="160">
                        <p class="l-topics--title">製品を〇〇会社に提供</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_04.jpg" alt="" width="230" height="160">
                        <p class="l-topics--title">海外提携パートナー情報を更新</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_05.jpg" alt="" width="230" height="160">
                        <p class="l-topics--title">採用情報を更新</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- <section class="l-topics">
        <h2 class="h2-ttl--main">Topics</h2>
        <p class="h2-ttl--sub">トピックス</p>
        <div class="l-swiper">
            <ul>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_01.jpg" alt="" width="330" height="230">

                    </div>
                    <p class="l-topics--title">製品DDDR、2024年12月販売開始</p>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_02.jpg" alt="" width="330" height="230">
                        <p class="l-topics--title">2025春産業フェアに出展</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_03.jpg" alt="" width="330" height="230">
                        <p class="l-topics--title">製品を〇〇会社に提供</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_04.jpg" alt="" width="330" height="230">
                        <p class="l-topics--title">採用情報を更新</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_05.jpg" alt="" width="330" height="230">
                        <p class="l-topics--title">海外提携パートナー情報を更新</p>
                    </div>
                </li>
            </ul>
        </div>
    </section> -->
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
                    'posts_per_page' => 3,
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
                        <li class="list-wrapper">
                            <!-- 日時 -->
                            <p class="news-day">
                                <time class="c-news-date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                                    <?php echo esc_html(get_the_date('Y/m/d')); ?>
                                </time>
                            </p>
                            <!-- タクソノミー -->
                            <ul class="news-taxonomies" style="display: flex; flex-direction: row; gap:5px; flex-wrap: wrap;">
                                <?php
                                $taxonomies = ['newstag'];
                                foreach ($taxonomies as $taxonomy) {
                                    $terms = get_the_terms($post->ID, $taxonomy);
                                    if ($terms) :
                                        foreach ($terms as $term) :
                                ?>
                                            <li class="l-news-label-txt">
                                                <?php echo esc_html($term->name); ?>
                                            </li>
                                <?php
                                        endforeach;
                                    endif;
                                }
                                ?>
                            </ul>
                            <!-- ニュースタイトル -->
                            <p class="l-news-text">
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
                    'posts_per_page' => 3,
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
                        <li class="list-wrapper">
                            <!-- 日時 -->
                            <p class="news-day">
                                <time class="c-news-date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                                    <?php echo esc_html(get_the_date('Y/m/d')); ?>
                                </time>
                            </p>
                            <!-- タクソノミー -->
                            <ul class="news-taxonomies" style="display: flex; flex-direction: row; gap:5px; flex-wrap: wrap;">
                                <?php
                                $taxonomies = ['newstag'];
                                foreach ($taxonomies as $taxonomy) {
                                    $terms = get_the_terms($post->ID, $taxonomy);
                                    if ($terms) :
                                        foreach ($terms as $term) :
                                ?>
                                            <li class="l-news-label-txt">
                                                <?php echo esc_html($term->name); ?>
                                            </li>
                                <?php
                                        endforeach;
                                    endif;
                                }
                                ?>
                            </ul>
                            <!-- ニュースタイトル -->
                            <p class="l-news-text">
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
            </ul>
            <a href="<?php echo esc_url(home_url('/newslist-ir')); ?>" tabindex="0" class="btn--newsmore"><span style="font-style: italic;">IR NEWS</span>一覧へ</a>

        </div>
    </section>
    <section style="background-color: rgb(48, 56, 56); height: 350px;">three-strong </section>
    <section style="background-color: rgb(48, 56, 56); height: 350px;">img </section>
    <section style="background-color: rgb(99, 167, 167); height: 350px;">product </section>
</main>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const titles = document.querySelectorAll(".l-topics--title");
    const maxLength = 14;  // 最大文字数（必要に応じて調整）

    titles.forEach(function(title) {
        if (title.textContent.length > maxLength) {
            title.textContent = title.textContent.slice(0, maxLength) + "...";
        }
    });
});

</script>

<?php
get_footer(); // footer.php を読み込む
?>