<?php

//REGISTER CSS
function loadCSS()
{
    if(is_home()){
        wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/style.min.css', [], null, 'all');
    }elseif(is_page() || is_archive()){
        wp_enqueue_style('pages', get_template_directory_uri() . '/dist/css/style-pages.min.css', [], null, 'all');
    }elseif(is_single()){
        wp_enqueue_style('single', get_template_directory_uri() . '/dist/css/style-single.min.css', [], null, 'all');
    }elseif(is_404()){
        wp_enqueue_style('error', get_template_directory_uri() . '/dist/css/style-error.min.css', [], null, 'all');
    }
}
add_action('wp_enqueue_scripts', 'loadCSS');

