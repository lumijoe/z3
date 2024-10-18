</main>

<footer style="height: 400px; background-color: bisque;">
    <section class="footer-first" style="background-color: aquamarine; height: 300px;">
        <h2>Footer First Section</h2>
    </section>
    <section class="footer-second" style="background-color: rgb(255, 249, 127); height: 120px;">
        <h2>Footer Second Section</h2>
    </section>
</footer>
<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
<script>
    // topics liを順番に横スクロールさせるアニメーション
    gsap.to(".l-topics li", {
        x: -350, // 横にスクロールさせる量（px単位）
        duration: 1, // 各要素の移動時間
        stagger: {
            each: 0.5, // 各要素が順番に動き出す間隔
            repeat: -1, // 無限ループ
            repeatDelay: 4, // 繰り返しの前に4秒の待機を設定
        },
        ease: "power2.inOut", // 「動き始めと終わりがゆっくり」の効果
        repeat: -1, // 無限ループ
        yoyo: true, // 動いたあとに「元に戻る」効果
        paused: false, // 自動再生
    });
    // hero liを順番に横スクロールさせるアニメーション
    gsap.to(".l-hero li", {
        x: -600, // 横にスクロールさせる量（px単位）
        duration: 0.7, // 各要素の移動時間
        stagger: {
            each: 1, // 各要素が順番に動き出す間隔
            repeat: -1, // 無限ループ
            repeatDelay: 2.5, // 繰り返しの前に2秒の待機を設定
        },
        ease: "power2.inOut", // 「動き始めと終わりがゆっくり」の効果
        repeat: -1, // 無限ループ
        yoyo: true, // 動いたあとに「元に戻る」効果
        paused: false, // 自動再生
    });
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZgetbyMGWSFlBw8HfJo=" crossorigin="anonymous"></script>
</body>

</html>