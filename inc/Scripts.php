<?php

//REGISTER JS
function loadJS()
{
    if (is_home()) {
        wp_enqueue_script('scripts', get_template_directory_uri() . '/dist/js/script-home.js', [], null, true);
    } elseif (is_page() || is_archive()) {
        wp_enqueue_script('pages', get_template_directory_uri() . '/dist/js/script-pages.js', [], null, true);
    } elseif (is_single()) {
        wp_enqueue_script('single', get_template_directory_uri() . '/dist/js/script-single.js', [], null, true);
    } elseif (is_404()) {
        wp_enqueue_script('error', get_template_directory_uri() . '/dist/js/script-error.js', [], null, true);
    }
}

add_action('wp_enqueue_scripts', 'loadJS');
