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