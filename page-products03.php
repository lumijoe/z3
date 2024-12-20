<!-- 03 -->
<?php

/**
 * Template Name: page-products03
 * Description: This is the template
 */

get_header('product');
?>
<main>
    <section style="background-color: rgb(145, 145, 145); height: 32px;">bread>bread>bread</section>
    <section style="background-color: rgb(218, 218, 218); height: 75px;">PRODUCTS / 02</section>
    <section style="background-color: aqua; height: 214px;">hero</section>
    <section style="background-color: rgb(0, 255, 8); height: 972px;">News & Topics</section>
    <section style="background-color: rgb(104, 128, 128); height: 343px;">CTA_カタログ</section>
    <section style="background-color: rgb(251, 251, 251); height: auto;" id="03search">
        <div style="background-color: #dfa3a3; margin: 0 auto;">
            <h2>検索C</h2>
            <!-- <div style="margin: 0 auto; width: 80%; text-align: center; padding-bottom: 20px;">
                    <input type="text" id="search-input" style="border: 1px solid #232323; width: 400px;" placeholder="キーワードを入力して検索">
                    <button class="btn btn-outline-success" type="button" id="button-addon2"><i class="fas fa-search"></i> 検索</button>
                </div> -->
        </div>
        <div>
            <ul style="display: flex; flex-direction: row; width: 80%; align-content: center; justify-content: center; gap: 20px; margin: 0 auto;">
                <li><button class="btn btn-outline-success" type="button" id="btn-all"><i class="fas fa-search"></i> 一覧で検索</button></li>
                <li><button class="btn btn-outline-success" type="button" id="btn-material"><i class="fas fa-search"></i> 処理材料で検索</button></li>
                <li><button class="btn btn-outline-success" type="button" id="btn-purpose"><i class="fas fa-search"></i>用途で検索</button></li>
            </ul>
            <!-- 検索用の入力フィールド下段 -->
            <div style="margin: 0 auto; width: 80%; text-align: center; padding-top: 20px;">
                <input type="text" id="search-input" style="border: 1px solid #232323; width: 400px;" placeholder="キーワードを入力して検索 icon">
                <!-- <button class="btn btn-outline-success" type="button" id="button-addon2"><i class="fas fa-search"></i> 検索</button> -->
            </div>
        </div>
        <!-- 商品リスト -->
        <div id="product-display">
            <!-- 初期状態で全ての商品を表示 -->
            <ul id="all-products" class="product-list active">
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品001</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品002</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品003</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品004</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品005</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品006</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品007</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品008</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品009</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品010</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品011</a></li>
                <li style="background-color: aquamarine;"><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品012処理</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品013</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品014</a></li>
                <li style="background-color: aquamarine;"><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品015処理</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品016</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品017</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品018</a></li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品019</a></li>
                <li style="background-color: rgb(234, 255, 127);"><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品020用途</li>
                <li style="background-color: rgb(234, 255, 127);"><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品021用途</li>
                <li><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0"></a>商品022</li>
                <li style="background-color: rgb(234, 255, 127);"><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品023用途</li>
            </ul>

            <!-- 処理材料リスト -->
            <ul id="material-products" class="product-list">
                <li style="background-color: aquamarine;"><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品012処理</li>
                <li style="background-color: aquamarine;"><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品015処理</li>
            </ul>

            <!-- 用途リスト -->
            <ul id="purpose-products" class="product-list">
                <li style="background-color: rgb(234, 255, 127);"><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品020用途</a></li>
                <li style="background-color: rgb(234, 255, 127);"><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品021用途</a></li>
                <li style="background-color: rgb(234, 255, 127);"><a href="<?php echo esc_url(home_url('/p01-001')); ?>" tabindex="0">商品023用途</a></li>
            </ul>
        </div>
    </section>
    <section style="background-color: rgb(157, 179, 179); height: 314px;">CTA_ダウンロード & 問い合わせ</section>
</main>
<footer style="height: 400px; background-color: bisque;">
    <section style="background-color: aquamarine; height: 812px;">footer-first</section>
    <section style="background-color: rgb(255, 249, 127); height: 134px;">footer-second</section>
</footer>
<!-- このページ特有のscript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const allProducts = document.getElementById('all-products');
        const materialProducts = document.getElementById('material-products');
        const purposeProducts = document.getElementById('purpose-products');
        const searchInput = document.querySelector('input[type="text"]');
        const allBtn = document.getElementById('btn-all');
        const materialBtn = document.getElementById('btn-material');
        const purposeBtn = document.getElementById('btn-purpose');

        // デフォルトで一覧表示をアクティブに設定
        allProducts.classList.add('active');

        // キーワード検索処理
        searchInput.addEventListener('input', function() {
            const keyword = searchInput.value.toLowerCase();
            filterProducts(keyword);
        });

        // 各ボタンにホバーイベントを追加
        allBtn.addEventListener('mouseenter', function() {
            resetSearch(); // キーワード検索をリセット
            showProducts(allProducts); // 一覧を表示
        });

        materialBtn.addEventListener('mouseenter', function() {
            resetSearch(); // キーワード検索をリセット
            showProducts(materialProducts); // 処理材料のリストを表示
        });

        purposeBtn.addEventListener('mouseenter', function() {
            resetSearch(); // キーワード検索をリセット
            showProducts(purposeProducts); // 用途のリストを表示
        });

        // ホバーを外したときに、デフォルトの全リストに戻す
        const searchButtons = [allBtn, materialBtn, purposeBtn];
        searchButtons.forEach(function(btn) {
            btn.addEventListener('mouseleave', function() {
                // デフォルトのリスト（全商品）を表示
                showProducts(allProducts);
            });
        });

        // キーワードによるフィルタリング関数
        function filterProducts(keyword) {
            clearActiveLists(); // 他のリストを非表示
            allProducts.classList.add('active'); // 全商品を表示状態に
            const items = allProducts.querySelectorAll('li');
            items.forEach(function(item) {
                const text = item.textContent.toLowerCase();
                if (text.includes(keyword)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // 商品リストを表示する関数
        function showProducts(list) {
            clearActiveLists(); // 全リストを非表示
            list.classList.add('active'); // 指定されたリストを表示
        }

        // 他のリストを非表示にする関数
        function clearActiveLists() {
            allProducts.classList.remove('active');
            materialProducts.classList.remove('active');
            purposeProducts.classList.remove('active');
        }

        // キーワード検索のリセット
        function resetSearch() {
            searchInput.value = ''; // 入力欄をクリア
            const items = allProducts.querySelectorAll('li');
            items.forEach(function(item) {
                item.style.display = 'block'; // 全アイテムを表示
            });
        }
    });
</script>
</body>

</html>