<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title> Uczymy si Wordpresa</title>
        <?php wp_head(); ?>
    </head>
    <!--<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">-->
    
    <?php
        if( is_front_page() ):
            $uczymy_classes = array( 'uczymy-class', 'my-class' );
        else:
            $uczymy_classes = array( 'no-uczymy-clas' );
        endif;

    ?>
<body <?php body_class( $uczymy_classes ); ?> >

    <div class="container">

        <div class="row">

            <div class="col-xs-12"> 

                     <nav class="navbar navbar-default">
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
                            <!-- Collect the nav links, forms, and other content for toggling 
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                
                            </ul>-->
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                

                 

            </div>

        </div>
    </div> 
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?> alt="" />