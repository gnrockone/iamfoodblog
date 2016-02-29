<?php get_header(); ?>
	<?php get_template_part('searchmethods'); ?>

	<?php if ( get_query_var('paged') ) { $paged = get_query_var('paged');
	} elseif ( get_query_var('page') ) {$paged = get_query_var('page');
	} else { $paged = 1; } ?>
	<?php $tag = get_query_var('tag'); ?>
	<?php $args = array(
		'tag' => $tag,
		'posts_per_page' => 1,
		'post_status'   => 'publish',
		'page' => $paged
	); 
	
	$posts_obj = new WP_Query( $args ); ?>
	<pre><?php print_r($posts_obj);?></pre>
	<div class="row content-wrapper">
	<h3 class="text-center"><?php echo $posts_obj->found_posts; ?> Of The Best <?php echo ucfirst(get_queried_object()->name); ?> Recipes On The Internet</h3>
	<?php if( $posts_obj->have_posts() ): while( $posts_obj->have_posts() ): $posts_obj->the_post(); ?>
		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 height-300">
			<div class="text-center"><?php the_post_thumbnail('medium', array( 'class' => 'img-responsive center-block') ); ?></div>
			<h4><a href="<?php echo $post->guid; ?>"><?php the_title(); ?></a></h4>
			<?php $trimmed = wp_trim_words( $posts_obj->post->post_content, 25, '...'); ?>
			<p class="open-sans"><?php echo $trimmed; ?><p>
			<p class="open-sans"><a href="<?php echo the_permalink(); ?>">Read More</a></p>
		</div>
	<?php endwhile; endif; ?>
	<?php wp_reset_query(); ?>
	</div>
	<div class="row">
		<?php numeric_pagination( $posts_obj ); ?>
		<?php //paging_navigation( $posts_obj ); ?>
	</div>
	
<?php get_footer(); ?>