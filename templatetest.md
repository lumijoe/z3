<!-- サステナビリティ一般一覧ページ -->
<?php

/**
 * Template Name: newslist-sustainability
 * Description: This is the template
 */

get_header('product');
?>
<main>
    <div class="l-breadcrumbs c-pdlr--wide">
        <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
            <li><a href="<?php echo esc_url(home_url('/newslist-sustainability')); ?>">サステナビリティニュース一覧</a></li>
        </ul>
    </div>
    <div class="l-title--page c-pdlr--wide">
        <h2 class="c-pagetitle-h2">サステナビリティニュース一覧</h2>
    </div>
    <div class="l-image--page c-pdlr--wide">
        <div class="c-overlay-image--page"></div>
        <p class="c-imagetitle"><span class="c-imagetitle--l">Sustainability N</span>ews</p>
    </div>
    <!-- news -->
    <section class="l-news c-malr--wide c-pdlr--morewide c-pdb--s">
        <div>
            <ul>
                <li>サステナビリティ</li>
            </ul>
        </div>
    </section>
    <section class="l-newslist">
        <ul>
            <li class="l-news-wrapper">
                <img src="../wp-content/uploads/assets/images/img_11.jpg" alt="">
                <div class="l-news-wrapper--txt">
                    <div class="l-news-wrapper--txt-first">
                        <p class="c-news-date">2024/09/06</p>
                        <ul>
                            <li>展示会</li>
                            <li>サステナビリティ</li>
                        </ul>
                    </div>
                    <div class="l-news-wrapper--txt-second">
                        <p class="textoverm">「BATTERY JAPAN秋（スマートエネルギーWEEK内）」出展のお知らせ</p>
                    </div>
                </div>
            </li>
            <li class="l-news-wrapper">
                <img src="../wp-content/uploads/assets/images/img_13.jpg" alt="">
                <div class="l-news-wrapper--txt">
                    <div class="l-news-wrapper--txt-first">
                        <p class="c-news-date">2024/09/06</p>
                        <ul>
                            <li>サステナビリティ</li>
                        </ul>
                    </div>
                    <div class="l-news-wrapper--txt-second">
                        <p class="textoverm">（新聞記事掲載）回転炉床炉開発で提携（2024年9月12日付 日刊工業新聞 PDF：77.6KB）</p>
                    </div>
                </div>
            </li>
            <li class="l-news-wrapper">
                <img src="../wp-content/uploads/assets/images/img_01.jpg" alt="">
                <div class="l-news-wrapper--txt">
                    <div class="l-news-wrapper--txt-first">
                        <p class="c-news-date">2024/09/06</p>
                        <ul>
                            <li>展示会</li>
                            <li>サステナビリティ</li>
                        </ul>
                    </div>
                    <div class="l-news-wrapper--txt-second">
                        <p class="textoverm">「BATTERY JAPAN秋（スマートエネルギーWEEK内）」出展のお知らせ</p>
                    </div>
                </div>
            </li>
            <li class="l-news-wrapper">
                <img src="../wp-content/uploads/assets/images/img_13.jpg" alt="">
                <div class="l-news-wrapper--txt">
                    <div class="l-news-wrapper--txt-first">
                        <p class="c-news-date">2024/09/06</p>
                        <ul>
                            <li>サステナビリティ</li>
                        </ul>
                    </div>
                    <div class="l-news-wrapper--txt-second">
                        <p class="textoverm">（新聞記事掲載）回転炉床炉開発で提携（2024年9月12日付 日刊工業新聞 PDF：77.6KB）</p>
                    </div>
                </div>
            </li>
            <li class="l-news-wrapper">
                <img src="../wp-content/uploads/assets/images/img_11.jpg" alt="">
                <div class="l-news-wrapper--txt">
                    <div class="l-news-wrapper--txt-first">
                        <p class="c-news-date">2024/09/06</p>
                        <ul>
                            <li>展示会</li>
                            <li>サステナビリティ</li>
                        </ul>
                    </div>
                    <div class="l-news-wrapper--txt-second">
                        <p class="textoverm">「BATTERY JAPAN秋（スマートエネルギーWEEK内）」出展のお知らせ</p>
                    </div>
                </div>
            </li>
            <li class="l-news-wrapper">
                <img src="../wp-content/uploads/assets/images/img_01.jpg" alt="">
                <div class="l-news-wrapper--txt">
                    <div class="l-news-wrapper--txt-first">
                        <p class="c-news-date">2024/09/06</p>
                        <ul>
                            <li>サステナビリティ</li>
                        </ul>
                    </div>
                    <div class="l-news-wrapper--txt-second">
                        <p class="textoverm">（新聞記事掲載）回転炉床炉開発で提携（2024年9月12日付 日刊工業新聞 PDF：77.6KB）</p>
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

<!-- コード修正前irニュースページ -->
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
            <li class="l-news-wrapper">
                <div class="l-news-wrapper--txt">
                    <div class="l-news-wrapper--txt-first">
                        <p class="c-news-date">2024/09/06</p>
                        <ul>
                            <li class="w--90">IR</li>
                        </ul>
                        <p class="c-pdl--s">2025年3月期 第1四半期決算短信（日本基準）（連結）<span>（PDF：635KB）</span></p>
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
            <li class="l-news-wrapper">
                <div class="l-news-wrapper--txt">
                    <div class="l-news-wrapper--txt-first">
                        <p class="c-news-date">2024/09/06</p>
                        <ul>
                            <li class="w--90">IR</li>
                        </ul>
                        <p class="c-pdl--s">2023年度 決算説明会</p>
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
                        <p class="c-pdl--s">自己株式の取得状況及び取得終了に関するお知らせ<span>（PDF：95KB）</span></p>
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
                        <p class="c-pdl--s">2024年3月期 決算短信（日本基準）（連結）<span>（PDF：384KB）</span></p>
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
                                <div class="" style="list-style-type: none;">
                                    <a class="" href="<?php the_permalink(); ?>">
                                        <!-- 画像 -->
                                        <?php
                                        $news_img = get_field('news_image');
                                        if ($news_img) :
                                        ?>
                                            <img src="<?php echo esc_url($news_img); ?>" alt="" style="max-width: 133px; max-height: 83px; aspect-ratio: 133 / 83;">
                                        <?php endif; ?>
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
                                    </a>
                                </div>
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

<!-- front-page.phpのスタイル崩れ前のコードあり -->
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
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">サステナビリティ</p>
                    <p class="l-news-text">テキストが入りますテキストが入ります</p>
                </li>
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">お知らせ</p>
                    <p class="l-news-text">テキストが入りますテキストが入りますテキストが入ります</p>
                </li>
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
                    'posts_per_page' => 5,
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
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">サステナビリティ</p>
                    <p class="l-news-text">テキストが入りますテキストが入ります</p>
                </li>
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">お知らせ</p>
                    <p class="l-news-text">テキストが入りますテキストが入りますテキストが入ります</p>
                </li>
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


## 製品情報のハッシュタグなどで使用できるかも
<section class="l-topics">
        <h2 class="h2-ttl--main">Topics</h2>
        <p class="h2-ttl--sub">トピックス</p>
        <div class="l-swiper">
            <ul>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_01.jpg" alt="" width="230" height="160">
                    </div>
                    <p class="l-topics--title">製品DDDR、2024年12月販売開始</p>
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

## パンくず
<div class="l-breadcrumbs c-pdlr--wide">
    <ul>
        <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>">ニュースルーム</a></li>
    </ul>
    <?php if(function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>