<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title> Uczymy sie Wordpresa</title>
        <?php wp_head(); ?>
    </head>
    
    <?php
        if( is_front_page() ):
            $uczymy_classes = array( 'uczymy-class', 'my-class' );
        else:
            $uczymy_classes = array( 'no-uczymy-class' );
        endif;

    ?>
<body <?php body_class( $uczymy_classes ); ?> >

    <div class="container">

        <div class="row">

            <div class="col-xs-12"> 

                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Uczymy sie wordpressa</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php 
                                wp_nav_menu(array(
                                    'theme_llocation' => 'primary',
                                    'container' => false,
                                    'menu_class' => 'nav navbar-nav navbar-right'
                                    )
                                ); 
                            ?>
                        </div>  
                    </div><!-- /.container-fluid -->
                </nav>
                
            </div>
                <div class="col-xs-12">

                    <div class="search-form-container">
                        
                        <?php get_search_form() ?>
                    </div>
                </div> 

        </div>
<<<<<<< HEAD
    </div> 
<<<<<<< HEAD
    
=======
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?> alt="" />
>>>>>>> parent of bb2216a... połowa live strem 3
=======
>>>>>>> parent of e339d4d... Revert "połowa live strem 3"
