<?php 
	if( have_comments() ):
	//prints the number of comments
	//0 - No comments
	//1 - One comment
	//% - Two or more comments
	comments_number( 'No Comments', 'One Comment', '% Comments');
	//list the comments
	wp_list_comments(); 
	endif;
?>