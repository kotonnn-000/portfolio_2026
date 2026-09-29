<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
    <title>株式会社グローリット|HOME</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/html5reset-1.6.1.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <script src="https://kit.fontawesome.com/13414a3658.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/brands.min.css">
</head>

<body>
    <div class="container">

        <header class="homeHeader" id="header">
            <div class="menuBar">
                <p class="logo1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_white.png" alt="">
                </p>

                <!--humburger-->
                <div class="navHamburger">
                    <div class="buttonTrigger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <nav>
                    <ul class="headerNav">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>service/">SERVICE</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>company/">COMPANY</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>vision/">VISION</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>contact/">CONTACT</a></li>
                    </ul>
                </nav>
                <div class="overlay"></div>
            </div>

            <div class="mainVisualText">
                <div class="title">
                    <h1>
                        効率的な広告を提供する<br>
                        インフルエンサー<br>
                        マーケティング会社
                    </h1>
                </div>
                <p class="homedown"><i class="fa-solid fa-chevron-down fa-bounce"></i></p>
            </div>

            <div class="videoArea">
                <video src="<?php echo get_stylesheet_directory_uri(); ?>/images/video.mp4" autoplay loop muted playsinline webkit-playsinline id="video"></video>
            </div>
        </header>