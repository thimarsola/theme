<?php

/**
 * Add theme support for HTML5 elements.
 *
 * @return void
 */
function custom_theme_support(): void {
	add_theme_support(
		'html5',
		array(
			'style',
			'script',
		)
	);
}

add_action( 'after_setup_theme', 'custom_theme_support' );

