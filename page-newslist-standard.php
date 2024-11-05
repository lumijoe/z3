<!-- ニュース一般一覧ページ -->
<?php

/**
 * Template Name: newslist-standard
 * Description: This is the template
 */

get_header('product');
?>
<div class="l-breadcrumbs c-pdlr--wide">
    <ul>
        <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>">ニュースルーム</a></li>
    </ul>
</div>
<div class="l-title--page c-pdlr--wide">
    <h2 class="c-pagetitle-h2">ニュースルーム</h2>
</div>
<div class="l-image--page c-pdlr--wide">
    <div class="c-overlay-image--page"></div>
    <p class="c-imagetitle"><span class="c-imagetitle--l">N</span>ews</p>
</div>
<!-- news -->
<section class="l-news c-malr--wide c-pdlr--morewide">
    <div>
        <ul>
            <li>すべて</li>
            <li>展示会</li>
            <li>お知らせ</li>
            <li>研究開発・技術録</li>
            <li>サステナビリティ</li>
        </ul>
        <a href="<?php echo esc_url(home_url('/newslist-ir')); ?>" class="c-txt--s c-position--right c-endicon-arrow--s">IRニュースはこちら</a>
    </div>
</section>
<section class="l-newslist">
    <ul>
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
                    <p class="textoverm">〇〇のお知らせ<span>PDF：35.7KB</span></p>
                </div>
            </div>
        </li>
        <li class="l-news-wrapper">
            <img src="../wp-content/uploads/assets/images/img_02.jpg" alt="">
            <div class="l-news-wrapper--txt">
                <div class="l-news-wrapper--txt-first">
                    <p class="c-news-date">2024/09/06</p>
                    <ul>
                        <li>展示会</li>
                        <li>サステナビリティ</li>
                    </ul>
                </div>
                <div class="l-news-wrapper--txt-second">
                    <p class="textoverm">環境WEEK2024の出展が終了しました</p>
                </div>
            </div>
        </li>
        <li class="l-news-wrapper">
            <img src="../wp-content/uploads/assets/images/img_03.jpg" alt="">
            <div class="l-news-wrapper--txt">
                <div class="l-news-wrapper--txt-first">
                    <p class="c-news-date">2024/09/06</p>
                    <ul>
                        <li>研究開発・技術録</li>
                    </ul>
                </div>
                <div class="l-news-wrapper--txt-second">
                    <p class="textoverm">サーモテックニュースvol.14<span>PDF：35.7KB</span></p>
                </div>
            </div>
        </li>
        <li class="l-news-wrapper">
            <img src="../wp-content/uploads/assets/images/img_04.jpg" alt="">
            <div class="l-news-wrapper--txt">
                <div class="l-news-wrapper--txt-first">
                    <p class="c-news-date">2024/09/06</p>
                    <ul>
                        <li>お知らせ</li>
                        <li>サステナビリティ</li>
                    </ul>
                </div>
                <div class="l-news-wrapper--txt-second">
                    <p class="textoverm">環境WEEK2024の出展が終了しました</p>
                </div>
            </div>
        </li>
        <li class="l-news-wrapper">
            <img src="../wp-content/uploads/assets/images/img_05.jpg" alt="">
            <div class="l-news-wrapper--txt">
                <div class="l-news-wrapper--txt-first">
                    <p class="c-news-date">2024/09/06</p>
                    <ul>
                        <li>研究開発・技術録</li>
                    </ul>
                </div>
                <div class="l-news-wrapper--txt-second">
                    <p class="textoverm">中外技録「アンモニアバーナの〇〇〇〇について」<span>PDF：35.7KB</span></p>
                </div>
            </div>
        </li>
        <li class="l-news-wrapper">
            <img src="../wp-content/uploads/assets/images/img_06.jpg" alt="">
            <div class="l-news-wrapper--txt">
                <div class="l-news-wrapper--txt-first">
                    <p class="c-news-date">2024/09/06</p>
                    <ul>
                        <li>サステナビリティ</li>
                        <li>展示会</li>
                    </ul>
                </div>
                <div class="l-news-wrapper--txt-second">
                    <p class="textoverm">環境WEEK2024の出展が終了しました環境WEEK2024の出展が終了しました環境WEEK2024の出展が終了しました</p>
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
<h2 class="" style="font-size:clamp(16px, 2vw, 30px)!important;">News</h2>
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
                                'terms' => array('typestandard', 'typesustainability'), // 表示するターム
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
                                            $taxonomies = ['tagexhibition', 'tagnews', 'tagtech', 'tagsustainability'];
                                            foreach ($taxonomies as $taxonomy) {
                                                $terms = get_the_terms($post->ID, $taxonomy);
                                                // タクソノミーが存在し、用語が取得できた場合
                                                if ($terms && !is_wp_error($terms)) :
                                            ?>
                                                    <ul style="display: flex; flex-direction: row; gap: 5px; flex-wrap: wrap; padding: 0;">
                                                        <?php
                                                        foreach ($terms as $term) :
                                                        ?>
                                                            <li style="padding: 2px 8px; border-radius: 10px; border: 1px solid #232323; width: max-content; font-size: 12px;">
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