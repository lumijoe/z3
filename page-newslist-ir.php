<!-- ニュースIR一覧ページ -->
<?php

/**
 * Template Name: newslist-ir
 * Description: This is the template
 */

get_header('product');
?>
<main>
    <h2>ニュースIR一覧リストです(実装中)
    </h2>
    <div style="display: flex; flex-direction: row; gap: 30px; margin-bottom: 130px;">
        <a href="<?php echo esc_url(home_url('/')); ?>" tabindex="0" style="padding: 6px 20px; background-color: #dee2e6; border-radius:60px;">サイトトップへ戻る</a>
    </div>
</main>
<!-- footer -->
<footer style="height: 400px; background-color: bisque;">
    <section style="background-color: aquamarine; height: 812px;">footer-first</section>
    <section style="background-color: rgb(255, 249, 127); height: 134px;">footer-second</section>
</footer>
</body>

</html>