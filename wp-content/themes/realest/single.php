<?php get_header(); ?>
	<?php if( get_field('single_slider') ): ?>
		<?php get_template_part('singleslider'); ?>
	<?php else: ?>
		<?php $single_header_image = get_field('single_header_image'); ?>
		<img class=""src="<?php echo $single_header_image['url'] ?>" >
	<?php endif; ?>
	<?php if( has_post_thumbnail() ): ?>
		<?php the_post_thumbnail('thumbnail'); ?>
	<?php endif; ?>
	<div class="container content-wrapper">
		<?php if( have_posts() ):
			while( have_posts() ): the_post(); ?> 
			<div class="text-center"><?php the_category(' '); ?></div>
			<h2 class="post-title content-title text-center"><?php the_title(); ?></h2>
			<div class="date-comments text-center"><?php the_date(); echo ' • '; comments_number('0 comments','1 comment','% comments'); ?></div>
			<?php the_content(); endwhile; endif; 
			single_pagination();
			get_recommended_posts();
			comments_template(); ?>

	</div>
	
<?php get_footer(); ?> 