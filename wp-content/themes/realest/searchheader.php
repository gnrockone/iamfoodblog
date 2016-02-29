<?php
//searchform for header
//has navbar-right
?>
<div class="search-container">
<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="navbar-form navbar-right form-inline">
	<input type="search" id="header-input-search" class="form-control hide" placeholder="Search Blog" 
	value="<?php echo get_search_query() ?>" name="s" title="Search" />
	<span><button id="header-btn-search" class="btn btn-default" type="submit" value="submit"><span class="glyphicon glyphicon-search"><span></button></span>
</form>
</div>