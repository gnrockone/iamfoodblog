<?php get_header(); echo get_option('facebook_url');?>
	<div class="row content-wrapper">
		<?php get_template_part('homeslider'); //gets the homeslider.php ?>
		<?php if ( have_posts() ): while( have_posts() ): the_post();
		the_content();
		endwhile;
		endif; ?>
		<?php if ( get_query_var('paged') ) { $paged = get_query_var('paged');
		} elseif ( get_query_var('page') ) {$paged = get_query_var('page');
		} else { $paged = 1; } ?>
		<?php $args = array(
			'posts_per_page'   => 6,
			'offset'           => 0,
			'paged'			   => $paged,
			'orderby'          => 'date',
			'order'            => 'DESC',
			'post_type'        => 'post',
			'post_status'      => 'publish',
		); ?>
		<?php $the_query = new WP_Query($args); ?>
		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 height-300">
				<div class="text-center"><?php the_post_thumbnail('medium', array( 'class' => 'img-responsive center-block')); ?></div>
				<h4 class="the-title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<?php $trimmed = wp_trim_words($the_query->post->post_content, 25, '...'); ?>
				<p class="open-sans"><?php echo $trimmed; ?><p>
				<p class="open-sans"><a href="<?php echo the_permalink(); ?>">Read More</a></p>
			</div>
		<?php endwhile; ?>

		<?php
		//got at functions-custom-made.php
      	if (function_exists('custom_pagination')) {
        custom_pagination($the_query->max_num_pages,"",$paged);
      	}
    	?>

		<?php else: ?>
		  <article>
		    <h1>Sorry...</h1>
		    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		  </article>
		<?php endif; wp_reset_query(); ?>
		
	</div>
<?php get_footer(); ?>