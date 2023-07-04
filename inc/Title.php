<?php

/**
 * Retrieve the title of the current webpage.
 *
 * @return string
 */
function get_title_page(): string {
	$site_name = SITE['name'];

	if ( is_home() || is_404() || is_search() ) {
		$title = $site_name;
	} elseif ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	} else {
		$title = get_the_title();
	}

	return $title;
}

/**
 * Retrieve the title for the head section of the current webpage.
 *
 * @return string
 */
function get_title_head(): string {
	$site_name = SITE['name'];

	if ( is_home() || is_404() || is_search() ) {
		$title = $site_name;
	} elseif ( is_category() ) {
		$title = single_cat_title( '', false ) . ' - ' . $site_name;
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false ) . ' - ' . $site_name;
	} else {
		$title = $site_name . ' | ' . get_the_title();
	}

	return $title;
}
