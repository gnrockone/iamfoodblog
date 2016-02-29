<?php 
/*
	==================================================
	| Add theme support
	==================================================
 */

//feature: 'custom-background' - adds background in the appearance menu in the dashboard
add_theme_support('custom-background');

//example. add_theme_support('post-formats',('aside','gallery','link'));
add_theme_support('post-formats',array('aside','image','video'));

//example. add_theme_support('html5',array('comment-list','comment-form','search-form'));
add_theme_support('html5',array('search-form','comment-form','gallery','comment-list'));

//enable theme_support for title-tag, Let WordPress manage the document title.
// By adding theme support, we declare that this theme does not use a
// hard-coded <title> tag in the document head, and expect WordPress to
// provide it for us.
add_theme_support('title-tag');


?>