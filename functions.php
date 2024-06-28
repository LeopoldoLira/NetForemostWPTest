<?php


function theme_styles(){
    wp_register_style('main_stylesheet', get_stylesheet_directory_uri(). '/assets/styles/css/main.min.css', '','1.0', 'all');
    wp_enqueue_style('main_stylesheet');
}

add_action('wp_enqueue_scripts', 'theme_styles');

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