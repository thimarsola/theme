<?php

/**
 * Loads the appropriate CSS stylesheet based on the current page type.
 */
function load_css(): void {
	if ( is_home() ) {
		wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/css/style.css', array(), null, 'all' );
	} elseif ( is_page() || is_archive() ) {
		wp_enqueue_style( 'pages', get_template_directory_uri() . '/dist/css/style-pages.css', array(), null, 'all' );
	} elseif ( is_single() ) {
		wp_enqueue_style( 'single', get_template_directory_uri() . '/dist/css/style-single.css', array(), null, 'all' );
	} elseif ( is_404() ) {
		wp_enqueue_style( 'error', get_template_directory_uri() . '/dist/css/style-error.css', array(), null, 'all' );
	}
}

add_action( 'wp_enqueue_scripts', 'load_css' );
