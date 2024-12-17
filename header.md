## 1217のニューヘッダー前のヘッダー

<?php
//====================================================
//  Template Name: Header
//====================================================
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
    <title>zero3 | Industory Company</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header">
        <section class="header-inner">
            <h1 class="header-logo"><a href="<?php echo esc_url(home_url()); ?>" style="color:#fff!important;">logo</a></h1>
            <nav class="header-nav c-flexcol">
                <ul class="header-nav--first c-flexrow" style="gap: 20px;">
                    <li style="color:#fff!important;"><a href="<?php echo esc_url(home_url('/products01#01search')); ?>" style="color:#fff!important;">検索A</a></li>
                    <li style="color:#fff!important;"><a href="<?php echo esc_url(home_url('/products02#02search')); ?>" style="color:#fff!important;">検索B</a></li>
                    <li style="color:#fff!important;"><a href="<?php echo esc_url(home_url('/products03#03search')); ?>" style="color:#fff!important;">検索C</a></li>
                </ul>
                <ul class="header-nav--second c-flexrow" style="gap: 20px;">
                    <li style="color:#fff;"><a href="<?php echo esc_url(home_url('/newslist-standard')); ?>" style="color:#fff!important;">ニュースルーム</a></li>
                    <li style="color:#fff;"><a href="<?php echo esc_url(home_url('/newslist-sustainability')); ?>" style="color:#fff!important;">サステナビリティニュース</a></li>
                    <li style="color:#fff;"><a href="<?php echo esc_url(home_url('/newslist-ir')); ?>" style="color:#fff!important;">IRニュース</a></li>
                </ul>
            </nav>
        </section>
    </header>
    <main>


## _header.scss
    .l-header {
    background-color: antiquewhite;
    width: 100%;
    height: 105px;
    margin: 0 auto;
    .header-inner {
        margin-left: 5%; 
        padding: 4px 0 4px 0;
        background-color: rgb(49, 52, 131);
        width: calc(100% - 5%);
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        .header-logo {
            color: red;
        }
        .header-nav {
            
        }
    }
}
.l-header-logo {
    font-size: 20px;
    color: aqua;
}