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
                    <p class="l-topics--title">テキストが入ります</p>
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
                        <p class="l-topics--title">テキストが入ります</p>
                    </div>
                </li>
                <li>
                    <div class="l-topics--img">
                        <img src="./wp-content/uploads/assets/images/img_04.jpg" alt="" width="330" height="230">
                        <p class="l-topics--title">テキストが入ります</p>
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
        <div class="l-news--area">
            <div>
                <h2 class="h2-ttl--main">News</h2>
                <p class="h2-ttl--sub">ニュース</p>
            </div>
            <ul class="l-news-label">
                <li>すべて</li>
                <li>お知らせ</li>
                <li>展示会</li>
            </ul>
        </div>
        <div class="l-news--area">
            <div>
                <h2 class="h2-ttl--main">IR News</h2>
                <p class="h2-ttl--sub">IRニュース</p>
            </div>
            <ul class="l-news-label">
                <li>IR情報</li>
            </ul>
        </div>
    </section>
    <section style="background-color: rgb(48, 56, 56); height: 350px;">three-strong </section>
    <section style="background-color: rgb(48, 56, 56); height: 350px;">img </section>
    <section style="background-color: rgb(99, 167, 167); height: 350px;">product </section>
</main>
<?php
get_footer(); // footer.php を読み込む
?>