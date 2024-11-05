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
    <!-- ここからSCFを利用したコード -->
<h2 class="" style="font-size:clamp(16px, 2vw, 30px)!important;">News Sustainability</h2>
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
                                'terms' => array('typesustainability'), // 表示するターム
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
                                        $news_img = get_field('news_img');
                                        if ($news_img) :
                                        ?>
                                            <img src="<?php echo esc_url($news_img); ?>" alt="ニュース画像">
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
                                            $taxonomies = ['tagsustainability'];
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