<?php

/*
    ==================================================
    | Creating Scripts Function
    ==================================================
 */

//Please retain this for templating/guide
if (!function_exists('rl_enqueque_scripts')) {
	function rl_enqueue_scripts() {
		//css
		wp_enqueue_style('wordpress-default', get_template_directory_uri() . '/css/wordpress-default.css', array(), '1.0.0.0', 'all');
		wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0.0.0', 'all');
		//wp_enqueue_style('layerslider', get_template_directory_uri() . '/layerslider/css/layerslider.css','','all');
		wp_enqueue_style('bootstrap',get_template_directory_uri(). '/css/bootstrap.css',array(),'3.3.5','all');
		wp_enqueue_style('style',get_stylesheet_uri(),array(),'1.0.0','all');
		wp_enqueue_style('all',get_template_directory_uri() .'/css/all.css',array(),'1.0.0','all');
		//js
		wp_enqueue_script('jquery');
		//wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/layerslider/jQuery/jquery-easing-1.3.js',array('jquery'),'',true);
		//wp_enqueue_script('jquery-transit-modified', get_template_directory_uri() . '/layerslider/jQuery/jquery-transit-modified.js',array('jquery'),'',true);
		//wp_enqueue_script('layerslider.kreaturamedia', get_template_directory_uri() . '/layerslider/js/layerslider.kreaturamedia.jquery.js',array('jquery'),'',true);
		//wp_enqueue_script('layerslider.transitions', get_template_directory_uri() . '/layerslider/js/layerslider.transitions.js',array('jquery'),'',true);
		wp_enqueue_script('modernizr',get_template_directory_uri(). '/js/modernizr.js',array('jquery'),'',false);
		wp_enqueue_script('bootstrapjs',get_template_directory_uri(). '/js/bootstrap.js',array('jquery'),'3.3.5',true);
		wp_enqueue_script('masonryjs',get_template_directory_uri(). '/js/masonry.pkgd.js',array('jquery'), '',true);
		wp_enqueue_script('imagesloadedjs',get_template_directory_uri(). '/js/imagesloaded.pkgd.js',array('jquery'),'',true);
		wp_enqueue_script('realestjs',get_template_directory_uri(). '/js/realest.js',array(),'1.0.0',true);
	}
}
add_action('wp_enqueue_scripts','rl_enqueue_scripts');

//Please retain this for templating/guide
// if (!function_exists('nnp_enqueque_scripts')) {
// 	function nnp_enqueue_scripts() {
// 		//css
// 		wp_enqueue_style('wordpress-default', get_template_directory_uri() . '/css/wordpress-default.css', array(), '1.0.0.0', 'all');
// 		wp_enqueue_style('bootstrap',get_template_directory_uri(). '/css/bootstrap.css',array(),'3.3.5','all');
// 		wp_enqueue_style('style',get_stylesheet_uri(),array(),'1.0.0','all');
// 		wp_enqueue_style('custom',get_template_directory_uri() .'/css/custom.css',array(),'1.0.0','all');
// 		//js
// 		wp_enqueue_script('jquery');
// 		wp_enqueue_script('bootstrapjs',get_template_directory_uri(). '/js/bootstrap.js',array('jquery'),'3.3.5',true);
// 		wp_enqueue_script('masonryjs',get_template_directory_uri(). '/js/masonry.pkgd.js',array('jquery'), '',true);
// 		wp_enqueue_script('imagesloadedjs',get_template_directory_uri(). '/js/imagesloaded.pkgd.js',array('jquery'),'',true);
// 		wp_enqueue_script('customjs',get_template_directory_uri(). '/js/customjs.js',array(),'1.0.0',true);
// 	}
// }
// add_action('wp_enqueue_scripts','nnp_enqueue_scripts');



?>