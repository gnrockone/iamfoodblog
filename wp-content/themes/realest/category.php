<?php get_header(); ?>
	<?php get_template_part('searchmethods'); ?>
	<?php
	$category = get_category(get_query_var('cat')); 
	$cat_slug = $category->slug; 
	$cat_name = $category->name; 
	$post_type = get_post_type(get_query_var('post_type'));
	if ( get_query_var('paged') ) { $paged = get_query_var('paged');
	} elseif ( get_query_var('page') ) {$paged = get_query_var('page');
	} else { $paged = 1; }
	$args = array(
		'category_name' => $cat_slug,
		'post_type'     => $post_type,
		'post_status'   => 'publish',
		'posts_per_page'=> 2,
		); 
	$query = new WP_Query( $args ); ?>
	<div class="row content-wrapper">
		<?php if( get_query_var('cat') === 3): ?>
			<h3 class="text-center">Browse <?php echo $query->found_posts; ?> Awesome Recipes</h3>
		<?php else: ?>
			<h3 class="text-center"><?php echo $query->found_posts; ?> Of The Best 
		<?php echo $cat_name; ?> Recipes On The Internet</h3>
		<?php endif; ?>
		<?php if( $query->have_posts() ): while( $query->have_posts() ): $query->the_post(); ?>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 height-300">
				<div class="text-center"><?php the_post_thumbnail('medium', array( 'class' => 'img-responsive center-block') ); ?></div>
				<h4><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<?php $trimmed = wp_trim_words($query->post->post_content, 25, '...'); ?>
				<p class="open-sans"><?php echo $trimmed; ?><p>
				<p class="open-sans"><a href="<?php echo the_permalink(); ?>">Read More</a></p>
			</div>
		<?php endwhile; ?>
		<?php 
		else: ?>
			<article>
		    <h1>Sorry...</h1>
		    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		  	</article>
		<?php endif; wp_reset_query();?>

	</div>
	<div class="row">
			<?php //numeric_pagination( $query ); ?>
			<?php //paging_navigation();//page_navi( $query ); // ?>
	</div>
	
<?php get_footer(); ?>