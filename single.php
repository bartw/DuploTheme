<?php get_header(); ?>
 
<div id="blog">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
	 
			<div class="post">
				<?php if (!is_attachment()) : ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php endif; ?>
				<div class="entry">   
					<?php the_post_thumbnail(); ?>
					<?php the_content(); ?>
				</div>
			</div>
 
		<?php endwhile; ?>
	<?php endif; ?>
</div>
 
<?php get_footer(); ?>