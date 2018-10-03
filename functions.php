<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function uczymy_script_enqueue() { 
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css'  , array(),  '3.3.7', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/index.css'  , array(), 'all');
    
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);
    wp_enqueue_script( 'customjs' , get_template_directory_uri() . '/js/index.js', array(), '1.0.0', true);
    
}


add_action( 'wp_enqueue_scripts', 'uczymy_script_enqueue');
/*
	==========================================
	 Activate menus
	==========================================
*/
function uczymy_theme_setup() {

    add_theme_support('menus');

    register_nav_menu('primary', 'Primery Heder Navigation');  
    register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'uczymy_theme_setup');
/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats',array('aside', 'image', 'video'));
add_theme_support('html5',array('search-form'));
/*
	==========================================
	 Sidebar function
	==========================================
*/
function uczymy_widget_setup() {
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id'   => 'sidebar-1',
            'class'=> 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',

        )
    );   
}

add_action('widgets_init' , 'uczymy_widget_setup');

/*
	==========================================
	 Include Walker file
	==========================================
*/
require get_template_directory() . '/inc/walker.php';