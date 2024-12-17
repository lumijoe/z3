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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>zero3 | Industory Company</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header">
        <section class="l-header-inner">
            <div class="l-header-inner--level1" >
                <div class="l-header-inner--level1-left">
                    <p style="font-size:12px;">熱技術の新たな次元へ</p>
                </div>
                <div class="l-header-inner--level1-right">
                    <ul class="header-right">
                        <li class="icon-set">
                            <i class="icon1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_add_circle.svg" alt=""></i>
                            <i class="icon2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_add_circle.svg" alt=""></i>
                        </li>
                        <li class="nav-item">
                            <a href="#" target="_blank" class="btn-round">
                                <i class="fas fa-users" style="font-size:12px;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_add_circle.svg" alt=""></i>
                                採用情報
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" target="_blank" class="btn-round">
                                <i class="fas fa-users" style="font-size:12px;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_add_circle.svg" alt=""></i>
                                資料ダウンロード
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" target="_blank" class="btn-round">
                                <i class="fas fa-users" style="font-size:12px;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_add_circle.svg" alt=""></i>
                                お問い合わせ一覧
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- header-level2 -->
            <div class="l-header-inner--level2">プラントトップ</div>






            <!-- テスト中 -->
            <!-- <section class="header-inner">
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
            </nav>-->
        </section> 
    </header>
    <main>