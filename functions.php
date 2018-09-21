<?php

function uczymy_script_enqueue() { 
    wp_enqueue_style('bootsrap', get_template_directory_uri() . '/css/bootsrap.min.css'  , array(),  '3.3.7', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/index.css'  , array(),  '1.0.0', 'all');
    

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootsrap-js' , get_template_directory_uri() . '/js/bootsrap.min.js', array(), '3.3.7', true);
    wp_enqueue_script( 'customjs' , get_template_directory_uri() . '/js/index.js', array(), '1.0.0', true);
    
    
}

add_action( 'wp_enqueue_scripts', 'uczymy_script_enqueue');

function uczymy_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', 'Primery Heder Navigation');  
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'uczymy_theme_setup' );

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats',array('aside', 'image', 'video'));
