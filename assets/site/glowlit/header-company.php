<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
    <title>株式会社グローリット|COMPANY</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/html5reset-1.6.1.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    <script src="https://kit.fontawesome.com/13414a3658.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/brands.min.css">
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <header class="baseHeader">
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

            <div class="headerTitle">
                <h1>COMPANY</h1>
                <p>企業情報</p>
                <p class="down"><i class="fa-solid fa-chevron-down fa-bounce"></i></p>
            </div>
        
        </header>