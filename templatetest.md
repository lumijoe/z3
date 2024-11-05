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