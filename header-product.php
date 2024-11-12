<?php
//====================================================
//  Template Name: header-product
//====================================================
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/products.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/newsstandard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=expand_circle_down" />
    <title>zero3 | 分野Aページ</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header">
        <section class="header-inner">
            <h1 class="header-logo"><a href="<?php echo esc_url(home_url()); ?>" style="color:#fff!important;">logo</a></h1>
            <nav class="header-nav c-flexcol">
                <ul class="header-nav--first c-flexrow" style="gap: 20px;">
                    <li style="color:#fff!important;"><a href="<?php echo esc_url(home_url('/p01')); ?>" style="color:#fff!important;">製品分野01</a></li>
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
        <div class="l-breadcrumbs c-pdlr--wide">
            <p style="font-size:10px; margin-bottom:0px;"><?php if(function_exists('bcn_display')) {
                bcn_display();
            } ?></p>
        </div>
    </header>
    <main>