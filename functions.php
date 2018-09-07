<?php
function Uczymy_script_enqueue() {

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/UWP.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/UWP.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'Uczym_script_enqueue');

function uczymuy_sie_suport() {
add_theme_support('menus');
}

add_action('init', 'uczymuy_sie_suport');