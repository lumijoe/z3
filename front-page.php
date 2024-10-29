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
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">展示会</p>
                    <p class="l-news-text">テキストが入ります</p>
                </li>
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
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">研究開発・技術録</p>
                    <p class="l-news-text">テキストが入ります</p>
                </li>
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">お知らせ</p>
                    <p class="l-news-text">テキストが入りますテキストが入ります</p>
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
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">IR</p>
                    <p class="l-news-text">テキストが入りますテキストが入ります</p>
                </li>
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">IR</p>
                    <p class="l-news-text">テキストが入りますテキストが入りますテキストが入ります</p>
                </li>
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">IR</p>
                    <p class="l-news-text">テキストが入ります</p>
                </li>
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">IR</p>
                    <p class="l-news-text">テキストが入りますテキストが入りますテキストが入ります</p>
                </li>
                <li>
                    <p class="news-day">2024/00/00</p>
                    <p class="l-news-label-txt">IR</p>
                    <p class="l-news-text">テキストが入りますテキストが入ります</p>
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