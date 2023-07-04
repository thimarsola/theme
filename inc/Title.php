<?php

/**
 * Retrieve the title of the current webpage.
 * @return string
 */
function get_title_page(): string {
	$site_name = SITE['name'];

	// Set the default title to the site name.
	$title = $site_name;

	// If the current page is the homepage, 404 page, or search results page, use the site name as the title.
	if ( is_home() || is_404() || is_search() ) {
		$title = $site_name;
	} // If the current page is a category archive, use the category name as the title.
	elseif ( is_category() ) {
		$title = single_cat_title( '', false );
	} // If the current page is a taxonomy archive, use the term name as the title.
	elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	} // For all other pages, use the post title as the title.
	else {
		$title = get_the_title();
	}

	return $title;
}

/**
 * Retrieve the title for the head section of the current webpage.
 * @return string
 */
function get_title_head(): string {
	$site_name = SITE['name'];

	// Set the default title to the site name.
	$title = $site_name;

	// If the current page is the homepage, 404 page, or search results page, use the site name as the title.
	if ( is_home() || is_404() || is_search() ) {
		$title = $site_name;
	} // If the current page is a category archive, use the category name as the title.
	elseif ( is_category() ) {
		$title = single_cat_title( '', false ) . ' - ' . $site_name;
	} // If the current page is a taxonomy archive, use the term name as the title.
	elseif ( is_tax() ) {
		$title = single_term_title( '', false ) . ' - ' . $site_name;
	} // For all other pages, use the post title as the title.
	else {
		$title = get_the_title() . ' - ' . $site_name;
	}

	return $title;
}
