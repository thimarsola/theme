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
