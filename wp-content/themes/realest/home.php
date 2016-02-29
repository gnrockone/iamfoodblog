<?php get_header(); ?>
 	<?php global $wp_query; ?>
	<?php numeric_pagination(); ?>
	<?php page_navi( $wp_query ); ?>
	<pre><?php //print_r($wp_query); ?></pre>
<?php get_footer(); ?>