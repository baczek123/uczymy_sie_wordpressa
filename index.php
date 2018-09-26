<?php get_header(); ?>

<div clas="row">
	<div class="col-xs-12 col-sm-8">

		<?php 
		if( have_posts() ):
			while( have_posts() ): the_post(); echo 'TO JEST FORMAT: '.get_post_format(); ?>

				<?php get_template_part('content', get_post_format()); ?>


			<?php endwhile;

		endif;

		?>
	</div>
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>



<?php get_footer(); ?>