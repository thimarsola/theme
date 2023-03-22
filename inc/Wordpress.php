<?php

/**
 * Disable the emoji's
 */
function disable_emojis(): void
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

    // Remove from TinyMCE
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}

add_action('init', 'disable_emojis');

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce($plugins): array
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

/**
 * @return void
 */
function dm_remove_wp_block_library_css(): void
{
    wp_dequeue_style('wp-block-library');
}

add_action('wp_enqueue_scripts', 'dm_remove_wp_block_library_css');

//DISABLE GUTENBERG
add_filter('use_block_editor_for_post_type', function ($enabled, $post_type) {
    return 'your_post_type' === $post_type ? false : $enabled;
}, 10, 2);
add_filter('use_block_editor_for_post', '__return_false');

remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_footer', 'wp_enqueue_global_styles', 1);

add_action('wp_enqueue_scripts', 'mywptheme_child_deregister_styles', 20);
function mywptheme_child_deregister_styles(): void
{
    wp_dequeue_style('classic-theme-styles');
}

//DISABLE REST API
add_filter('rest_authentication_errors', 'wp_snippet_disable_rest_api');
function wp_snippet_disable_rest_api($access): WP_Error
{
    return new WP_Error(
        'rest_disabled',
        __('The WordPress REST API has been disabled.'),
        array('status' => rest_authorization_required_code())
    );
}


//remove head
remove_action('wp_head', 'wp_resource_hints', 2, 99);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'robots');
remove_filter('wp_robots', 'wp_robots_max_image_preview_large');
remove_filter("the_content", "wptexturize");

//fix close link tag
function disable_self_closing_tags(): void {
    ob_start( function ( $input ) {
        return str_replace( '/>', '>', $input );
    } );
}

add_action( 'wp_head', 'disable_self_closing_tags', 1 );
