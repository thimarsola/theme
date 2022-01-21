<?php

//REGISTER CSS
function loadCSS()
{
    if(is_home()){
        wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/style.min.css', [], null, 'all');
    }elseif(is_404()){
        wp_enqueue_style('error', get_template_directory_uri() . '/dist/css/style-error.min.css', [], null, 'all');
    }
}

add_action('wp_enqueue_scripts', 'loadCSS');

function dm_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'dm_remove_wp_block_library_css' );