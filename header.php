<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Uczymy sie Wordpressa</title>
<?php wp_head(); ?>
</head>

<?php
    if( is_front_page() ):
        $uczymy_classes = array( 'uczymu-class', 'my-class' );
    else:
        $uczymy_classes = array( 'no-uczymy-clas' );
    endif;

?>
<body <?php body_class( $uczymy_classes ); ?>>

	<?php wp_nav_menu(array('theme_llocation'=>'primary')); ?>
 
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?> alt="" />