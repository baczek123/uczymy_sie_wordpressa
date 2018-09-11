<?php

function uczymy_script_enqueue() { 
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/index.css'  , array(),  '1.0.0', 'all');
    wp_enqueue_script( 'customjs' , get_template_directory_uri() . '/js/index.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'uczymy_script_enqueue');

function uczymy_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', 'Primery Heder Navigation');  
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'uczymy_theme_setup' );