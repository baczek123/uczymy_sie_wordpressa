<?php 

// wp_enqueue_style - metoda dodawania stylu w wordpress
// dokumentacja: https://developer.wordpress.org/themes/basics/including-css-javascript/
function styles_method() {  
    // Register the style like this for a theme:  
    wp_register_style( 'index-style', get_template_directory_uri().'/my_css/index.css');  

    // enqueue the stule  
    wp_enqueue_style( 'index-style' );  
}  
add_action( 'wp_enqueue_scripts', 'styles_method' );