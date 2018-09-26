<?php get_header(); ?>



<div clas="row">
	<div class="col-xs-12 col-sm-8">

		<div class="row text-center">
			

		<?php 
		if( have_posts() ): $i = 0;
			while( have_posts() ): the_post();  ?>

				<?php if($i==0): ?>
					<div class="col-xs-12"> 
						
						<?php if( has_post_thumbnail() ): ?>

							<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
							
							<?php endif; ?>

							<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">',esc_url( get_permalink() ) ),'</a></h1>' ); ?>

							<small><?php the_category(' '); ?></small>

					</div>		

					<?php elseif($si > 0 && $i<= 2 ): ?>

						<div class="col-xs-6">

							<?php if( has_post_thumbnail() ): ?>

							<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
							
							<?php endif; ?>

							<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">',esc_url( get_permalink() ) ),'</a></h1>' ); ?>

							<small><?php the_category(' '); ?></small>
						</div>

						<?php elseif($i > 2 ): ?>

							<div class="col-xs-4">

								<?php if( has_post_thumbnail() ): ?>

								<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>

									<?php endif; ?>

									<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">',esc_url( get_permalink() ) ),'</a></h1>' ); ?>

									<small><?php the_category(' '); ?></small>
							</div>
						

					<?php endif; ?>
					
			<?php $i++; endwhile;

		endif;
		
		?>
		</div>
	</div>
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>


	

<?php get_footer(); ?>