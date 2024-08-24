<?php


function theme_styles(){
    wp_register_style('main_stylesheet', get_stylesheet_directory_uri(). '/assets/styles/css/main.min.css', '','1.0', 'all');
    wp_enqueue_style('main_stylesheet');
}


add_action('wp_enqueue_scripts', 'theme_styles');


function theme_js_scripts(){
    wp_register_script('main_script', get_stylesheet_directory_uri(). '/assets/js/main.js', array(), '1.0.0', true);
    wp_enqueue_script('main_script');
}

add_action('wp_enqueue_scripts' , 'theme_js_scripts');

add_theme_support('menus');

function create_custom_post_type(){
    register_post_type('articles',
    array(
        'labels' => array(
            'name'=> __('Articles'),
            'singular_name' =>__('Article')
        ),
        'public' => true,
        'has_archive' => false,
        'hierarchical' =>true,
        'supports' => array('title','editor', 'page-attributes', 'thumbnail'),
        'menu_icon' => 'dashicons-portfolio'
    ));

    flush_rewrite_rules (false);
}

add_action('init', 'create_custom_post_type');