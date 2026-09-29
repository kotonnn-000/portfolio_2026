<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&family=Kosugi&family=Lemon&family=Sacramento&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&family=Kosugi&family=Lemon&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&family=Kosugi&family=Lemon&family=M+PLUS+Rounded+1c&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&family=Kosugi&family=Lemon&family=M+PLUS+Rounded+1c&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&family=Sawarabi+Mincho&display=swap" rel="stylesheet">

<script src="https://d.line-scdn.net/liff/edge/2/sdk.js"></script>
</head>


<body class="body">

    <div class="mv_circle">
        <div class="circle-01"></div>
        <div class="circle-02"></div>
        <div class="circle-03"></div>
        <div class="circle-04"></div>
        <div class="circle-05"></div>
        <div class="circle-06"></div>
        <div class="circle-07"></div>
        <div class="circle-08"></div>
        <div class="circle-09"></div>
        <div class="circle-10"></div>
    </div>

    <header>
        <div class="header">
            <img src="<?php echo get_template_directory_uri(); ?>/images/strawberryWeek_header.png" alt="" class="headerbg">


            <div class="menubar">

                <h1 class="headericon">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                    <span class="iconname">Strawberry Week</span>
                    </a>
                </h1>


                <nav class="headernav">
                    <ul class="menulist">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>message/">Message</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>textbook/">Text book</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>mytextbook/">My Text book</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>lounge/">Lounge</a></li>
                    </ul>

                    <!--humburger-->
                    <div class="hamburger">
                        <div class="hamburgericon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt="" class="menuimg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/cross.png" alt="" class="crossimg">
                        </div>
                    </div>
                    <div class="activemenu">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="activemenuUrl">Home</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>message/" class="activemenuUrl">Message</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>textbook/" class="activemenuUrl">Text book</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>mytextbook/" class="activemenuUrl">My Text book</a></li>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>lounge/" class="activemenuUrl">Lounge</a></li>
                        </ul>
                    </div>
                </nav>
                


            </div>


        </div>
    </header>