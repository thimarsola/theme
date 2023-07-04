<?php

/**
 * Loads the appropriate JS script based on the current page type.
 */
function loadJS(): void {
	if ( is_home() ) {
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/dist/js/script-home.js', array(), null, true );
	} elseif ( is_page() || is_archive() ) {
		wp_enqueue_script( 'pages', get_template_directory_uri() . '/dist/js/script-pages.js', array(), null, true );
	} elseif ( is_single() ) {
		wp_enqueue_script( 'single', get_template_directory_uri() . '/dist/js/script-single.js', array(), null, true );
	} elseif ( is_404() ) {
		wp_enqueue_script( 'error', get_template_directory_uri() . '/dist/js/script-error.js', array(), null, true );
	}
}

add_action( 'wp_enqueue_scripts', 'loadJS' );
