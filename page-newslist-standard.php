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
        <li><a href="/">TOP</a></li>
        <li><a href="./newslist-standard.html">ニュースルーム</a></li>
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
            <li>プレスリリース</li>
            <li>展示会</li>
            <li>お知らせ</li>
            <li>研究・技術</li>
            <li>サステナビリティ</li>
        </ul>
        <a href="./newslist-ir.html" class="c-txt--s c-position--right c-endicon-arrow--s">IRニュースはこちら</a>
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
                    <p class="textoverm">環境WEEK2024の出展が終了しました<span>PDF</span></p>
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
                    <p class="textoverm">環境WEEK2024の出展が終了しました<span>PDF</span></p>
                </div>
            </div>
        </li>
        <li class="l-news-wrapper">
            <img src="../wp-content/uploads/assets/images/img_03.jpg" alt="">
            <div class="l-news-wrapper--txt">
                <div class="l-news-wrapper--txt-first">
                    <p class="c-news-date">2024/09/06</p>
                    <ul>
                        <li>研究・技術</li>
                        <li>プレスリリース</li>
                        <li>展示会</li>
                    </ul>
                </div>
                <div class="l-news-wrapper--txt-second">
                    <p class="textoverm">環境WEEK2024の出展が終了しました<span>PDF</span></p>
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
                    <p class="textoverm">環境WEEK2024の出展が終了しました<span>PDF</span></p>
                </div>
            </div>
        </li>
        <li class="l-news-wrapper">
            <img src="../wp-content/uploads/assets/images/img_05.jpg" alt="">
            <div class="l-news-wrapper--txt">
                <div class="l-news-wrapper--txt-first">
                    <p class="c-news-date">2024/09/06</p>
                    <ul>
                        <li>展示会</li>
                        <li>研究・技術</li>
                    </ul>
                </div>
                <div class="l-news-wrapper--txt-second">
                    <p class="textoverm">環境WEEK2024の出展が終了しました<span>PDF</span></p>
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
                        <li>プレスリリース</li>
                    </ul>
                </div>
                <div class="l-news-wrapper--txt-second">
                    <p class="textoverm">環境WEEK2024の出展が終了しました環境WEEK2024の出展が終了しました環境WEEK2024の出展が終了しました<span>PDF</span></p>
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