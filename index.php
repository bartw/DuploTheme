<?php get_header(); ?>
 
<div id="blog">
	<?php if(have_posts()) : ?>
		<?php $postCounter = 0; $style=''; while(have_posts()) : the_post(); $postCounter++; if ( $postCounter > 1 ) { $style='listPost'; } ?>

			<div class="post  <?php print $style; ?>">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		 
				<div class="entry">   
					<?php the_post_thumbnail(); ?>
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; ?>         
	<?php endif; ?>
</div>
<?php get_footer(); ?>