<!-- ニュース一般一覧ページ -->
<?php

/**
 * Template Name: newslist-standard
 * Description: This is the template
 */

get_header('product');
?>

<div class="l-title--page c-pdlr--wide">
    <h2 class="c-pagetitle-h2">ニュースルーム</h2>
</div>
<div class="l-image--page c-pdlr--wide">
    <div class="c-overlay-image--page"></div>
    <p class="c-imagetitle"><span class="c-imagetitle--l">N</span>ews</p>
</div>
<!-- news -->
<!-- <section class="l-news c-malr--wide c-pdlr--morewide">
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
</section> -->
<section class="l-news c-malr--wide c-pdlr--morewide">
    <div>
        <ul>
            <li data-slug="all" class="news-filter" style="cursor: pointer;">すべて</li>
            <li data-slug="tagexhibition" class="news-filter" style="cursor: pointer;">展示会</li>
            <li data-slug="tagnews" class="news-filter" style="cursor: pointer;">お知らせ</li>
            <li data-slug="tagtech" class="news-filter" style="cursor: pointer;">テック通信</li>
            <li data-slug="tagsustainability" class="news-filter" style="cursor: pointer;">サステナビリティ</li>
        </ul>
        <a href="<?php echo esc_url(home_url('/newslist-ir')); ?>" class="c-txt--s c-position--right c-endicon-arrow--s">IRニュースはこちら</a>
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
        <li class="l-news-wrapper">
            <!-- 画像のエスケープ処理 -->
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/img_01.jpg'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
            <div class="l-news-wrapper--txt">
                <div class="l-news-wrapper--txt-first">

                    <!-- 日時のエスケープ処理 -->
                    <time class="c-news-date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                        <?php echo esc_html(get_the_date('Y/m/d')); ?>
                    </time>
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
                </div>
                <!-- ニュースタイトルのエスケープ処理 -->
                <div class="l-news-wrapper--txt-second">
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <!-- <p class="c-pdl--s textoverm"> -->
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
<script>
    document.querySelectorAll('.news-filter').forEach(item => {
    item.addEventListener('click', function() {
        const slug = this.getAttribute('data-slug');
        fetchNewsByTag(slug);
    });
});

function fetchNewsByTag(slug) {
    const data = new FormData();
    data.append('action', 'filter_news');
    data.append('tag_slug', slug);

    fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
        method: 'POST',
        body: data
    })
    .then(response => response.text())
    .then(data => {
        document.querySelector('.l-newslist ul').innerHTML = data;
    })
    .catch(error => console.error('Error:', error));
}

</script>

</body>

</html>