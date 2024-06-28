<?php


function theme_styles(){
    wp_register_style('main_stylesheet', get_stylesheet_directory_uri(). '/assets/styles/css/main.min.css', '','1.0', 'all');
    wp_enqueue_style('main_stylesheet');
}

add_action('wp_enqueue_scripts', 'theme_styles');

add_theme_support('menus');