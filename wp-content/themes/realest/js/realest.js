/*! Please do not remove ! for uglify comment preservation
 */
//this declares $j as shorthand for jQuery
$j = jQuery.noConflict();

$j(document).ready( function(){
	//for header search toggle hide show
	var inputSearch = $j('#header-input-search');	
	$j('#header-btn-search').on('click', function(e){
		var inputSearch = $j('#header-input-search');
		if( inputSearch.hasClass('display-initial')) {
			if(inputSearch.val()) {
			} else {
				inputSearch.removeClass('display-initial').addClass('hide');	
				e.preventDefault();
			}
		} else { // to be shown input search
			inputSearch.removeClass('hide').addClass('display-initial');
			e.preventDefault();
		}
	});
	//hover social media change image src - INSTAGRAM
	var instagram = $j('#instagram');
	var defaultSrc = instagram.attr('src');
	instagram.hover(function(){
		instagram.attr('src','http://localhost/iamfoodblog/wp-content/uploads/instagram16-red.png');
	},function(){
		instagram.attr('src',defaultSrc);
	});

	function searchMethod() {

	}

	var value;
	//this is a search category javascript
	//search function - event keyup
	$j('.search-input').on('keyup', function(){
		$j('.active-results').remove();
		value = $j(this).val().toUpperCase();
		searchLength = value.length;

		//checks if there is a true result
		noResults = 0;
		counter= 0;
		$j('.category-options').each(function(index){
			counter++;
			searchIndex = $j(this).text().toUpperCase().indexOf(value);
			if ( -1 != searchIndex ) {
				categoryArray = $j(this).text().toUpperCase().split(value);
				$j('#categories-list').append('<li id="" class="active-results" data-option-array-index="'+ index +'">'+ $j(this).text() + '</li>');
			} else { //no result found
				noResults++;
			}
		});
		$j('.tag-options').each(function(index){
			counter++;
			searchIndex = $j(this).text().toUpperCase().indexOf(value);
			if ( -1 != searchIndex ) {
				tagArray = $j(this).text().toUpperCase().split(value);
				$j('#tags-list').append('<li id="" class="active-results" data-option-array-index="'+ index +'">'+ $j(this).text() + '</li>');
			} else { //no result found
				noResults++;
			}
		});
		//if no result do this
		if(noResults==counter) {
			$j('.active-results').remove();
			$j('.chosen-results').append('<li class="active-results">No Results Found</li>')
		}
	});
	//event focus search input category
	$j('#search-input-category').focus(function(){
		if (!value) {
		$j('.active-results').remove();
		$j('.category-options').each(function(index){
			$j('.chosen-results').append('<li id="" class="active-results" data-option-array-index="'+ index +'">'+ $j(this).text() + '</li>');
		});
		}
	});
	$j('#search-input-tag').focus();

	$j('#span-category').on('click', function(e) { 
		e.stopPropagation();
		$j('#categories-drop').toggleClass('display-none');
		if( !$j('#tags-drop').hasClass('display-none') ){
			$j('#tags-drop').toggleClass('display-none');
		}
	});
	$j('#span-tag').on('click', function(e) { 
		e.stopPropagation();
		$j('#tags-drop').toggleClass( 'display-none');
		if( !$j('#categories-drop').hasClass('display-none') ){
			$j('#categories-drop').toggleClass('display-none');
		} 
	});

	// $j('body').on('click', function(e) {
		
	// 	if( !$j('#categories-drop').hasClass('display-none') ){
	// 		$j('#categories-drop').toggleClass('display-none');
	// 	} 
	// 	if( !$j('#tags-drop').hasClass('display-none') ){
	// 		$j('#tags-drop').toggleClass('display-none');
	// 	}
	// });

	//initialize all the list
	$j('.category-options').each(function(index){
		$j('#categories-list').append('<li id="" class="active-results" data-option-array-index="'+ index +'">'+ $j(this).text() + '</li>');
	});
	$j('.tag-options').each(function(index){
		$j('#tags-list').append('<li id="" class="active-results" data-option-array-index="'+ index +'">'+ $j(this).text() + '</li>');
	});

	//toggle class highlighted
	$j(document).on('mouseover','li.active-results',function(){
		$j(this).toggleClass('highlighted');
	}).on('mouseout','li.active-results',function(){ $j(this).toggleClass('highlighted'); });
	//redirect page after clicking item
	$j(document).on('click','#categories-list li.active-results', function(){
		var dataIndex = $j(this).attr('data-option-array-index');
		var dataHref = $j('.category-options:eq('+dataIndex+')').attr('data-href')
		window.location = dataHref;
	});
	$j(document).on('click','#tags-list li.active-results', function(){
		var dataIndex = $j(this).attr('data-option-array-index');
		var dataHref = $j('.tag-options:eq('+dataIndex+')').attr('data-href')
		window.location = dataHref;
	});


	//jquery ui tabs
	//jQuery( "#custom-post-tabs" ).tabs();
	
}); //end of document.ready

jQuery(window).load(function() {
	jQuery('#slider').layerSlider({
		autoStart               : true,
		responsive              : true,
		keybNav                 : true,
    	touchNav                : true,
    	imgPreload              : false,
    	navPrevNext             : true,
    	navButtons              : true,
    	slideDelay              : 3000
	});

});


 
jQuery(document).ready(function() {
var offset = 250;
var duration = 10000;
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 200) {
			jQuery('.go-top').fadeIn(200);
		} else {
			jQuery('.go-top').fadeOut(200);
		}
	});	
	// Animate the scroll to top
	jQuery('.go-top').click(function(event) {
		event.preventDefault();
		jQuery('html, body').animate({scrollTop: 0}, 300);
	})
});
 


