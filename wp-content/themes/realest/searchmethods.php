<?php 
$category_ids = get_all_category_ids(); 
foreach($category_ids as $category_id): 
$category_names[] = get_category($category_id); endforeach; 
$tags = get_terms('post_tag'); ?>
<div id="search-methods-fluid" class="container-fluid">
	<div id="search-methods" class="row search-methods-row">
		<div id="search-method-1" class="search-method-container navbar-form col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<?php get_template_part('searchform'); ?>
		</div>
		<div id="search-method-2" class="search-method-container navbar-form col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<select id="select-tag" class="select-tags search-methods-select display-none">
				<?php foreach($tags as $tag): $index++; ?>
					<option id="tag-id-<?php echo $tag->term_id ?>" class="tag-options" data-href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?> (<?php echo $tag->count; ?>)</option>
				<?php endforeach; ?>
			</select>
			<div class="search-method">
				<div id="search-tag" class="chosen-container chosen-container-single">
					<a id="span-tag" class="chosen-single chosen-default"><span>Search by tag</span></a>
					<div id="tags-drop" class="chosen-drop display-none">
						<div class="chosen-search"><input id="search-input-tag"type="search" class="search-input form-control search-methods-input" placeholder="Search Tag" type="text" autocomplete="off"></div>
						<ul id="tags-list" class="chosen-results">
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="search-method-3" class="search-method-container navbar-form col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<select id="select-category" class="select-categories search-methods-select display-none">
			<?php foreach($category_names as $category_name): $index++; ?>
				<option id="category-id-<?php echo $category_name->term_id ?>" class="category-options" data-href="<?php echo get_category_link($category_name->term_id); ?>"><?php echo $category_name->name; ?> (<?php echo $category_name->count; ?>)</option>
			<?php endforeach; ?>
			</select>
			<div class="search-method">
				<div id="search-category" class="chosen-container chosen-container-single">
					<a id="span-category" class="chosen-single chosen-default"><span>Search by category</span></a>
					<div id="categories-drop" class="chosen-drop display-none">
						<div class="chosen-search"><input id="search-input-category" type="search" class="search-input form-control search-methods-input" placeholder="Search Category" type="text" autocomplete="off"></div>
						<ul id="categories-list" class="chosen-results">
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>