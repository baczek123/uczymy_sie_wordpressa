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

/*
	==========================================
	 Head Function
	==========================================
*/

function uczymy_remove_version() {
    return '';
    
}
add_filter('the_generator' , 'uczymy_remove_version');

/*
	==========================================
	Custom Post Type
	==========================================
*/

function uczymy_custom_post_type () {

    $labels = array(
        'name' => 'Portfolio',
        'singular_name' => 'Portfolio',
        'add_new' => 'Add Portfolio Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'Vieu Item',
        'search_item' => 'Search Portfolio',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item',

    );$args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'quwry_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        //'taxonomies' =>array('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from_search' => false 
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'uczymy_custom_post_type');

function uczymy_custom_taxonomies() {

    //add new taxonomy hierarchical
	$labels = array(
		'name' => 'Types',
		'singular_name' => 'Types',
		'search_items' => 'Search Types',
		'all_items' => 'All Types',
		'parent_item' => 'Parent Type',
		'parent_item_colon' => 'Parent Type:',
		'edit_item' => 'Edit Type',
		'update_item' => 'Update Type',
		'add_new_item' => 'Add New Work Type',
		'new_item_name' => 'New Type Name',
		'menu_name' => 'Types',
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'type' ),
	);
	
	register_taxonomy('type', array('portfolio'), $args);
	
    //add new taxonomy NOT hierarchical

}
    
    add_action('init','uczymy_custom_taxonomies' );
