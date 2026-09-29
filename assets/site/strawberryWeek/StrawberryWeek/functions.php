<?php
    function add_files(){
        //リセットcss html5reset-1.6.1.css
        wp_enqueue_style('reset-style', get_theme_file_uri('/css/html5reset-1.6.1.css'));

        //css
        wp_enqueue_style('style', get_theme_file_uri('/css/style.css'));

        //Google Fonts
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&family=Kosugi&family=Lemon&family=Sacramento&display=swap');
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&family=Kosugi&family=Lemon&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap"');
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&family=Kosugi&family=Lemon&family=M+PLUS+Rounded+1c&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap');
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner&family=Kosugi&family=Lemon&family=M+PLUS+Rounded+1c&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&family=Sawarabi+Mincho&display=swap');
    }
    add_action('wp_enqueue_scripts', 'add_files');

    add_theme_support('title-tag');
?>