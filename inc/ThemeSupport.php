<?php

function customThemeSupport() {
    add_theme_support(
        'html5',
        array(
            'script', // Fix for: The "type" attribute is unnecessary for JavaScript resources.
            'style',  // Fix for: The "type" attribute for the "style" element is not needed and should be omitted.
        )
    );
}
add_action( 'after_setup_theme', 'customThemeSupport' );


//DISABLE GUTENBERG
add_filter( 'use_block_editor_for_post_type', function( $enabled, $post_type ) {
    return 'your_post_type' === $post_type ? false : $enabled;
}, 10, 2 );
add_filter( 'use_block_editor_for_post', '__return_false' );
