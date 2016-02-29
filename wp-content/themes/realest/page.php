<?php get_header(); ?>
	<div class="container content-wrapper">
	<h1>PAGE.PHP</h1>
	<?php if( have_posts() ): while( have_posts() ): the_post(); the_content(); endwhile; endif;?>
	</div>
<?php get_footer(); ?>