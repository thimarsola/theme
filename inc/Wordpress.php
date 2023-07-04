<?php


/**
 * @return void
 */
function disable_emojis(): void {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}

add_action( 'init', 'disable_emojis' );

/**
 * @param  array<string>  $plugins
 *
 * @return array<string>
 */
function disable_emojis_tinymce( array $plugins ): array {
	return array_diff( $plugins, array( 'wpemoji' ) );
}

/**
 * @param  array<string>  $urls
 * @param  string  $relation_type
 *
 * @return array<string>
 */
function disable_emojis_remove_dns_prefetch( array $urls, string $relation_type ): array {
	if ( 'dns-prefetch' === $relation_type ) {
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
		$urls          = array_diff( $urls, array( $emoji_svg_url ) );
	}

	return $urls;
}


/**
 * @return void
 */
function dm_remove_wp_block_library_css(): void {
	wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'dm_remove_wp_block_library_css' );


/**
 * @param  bool  $enabled
 * @param  string  $post_type
 *
 * @return bool
 */
function disable_gutenberg_editor_for_post_type( bool $enabled, string $post_type ): bool {
	return 'your_post_type' === $post_type ? false : $enabled;
}

add_filter( 'use_block_editor_for_post_type', 'disable_gutenberg_editor_for_post_type', 10, 2 );
add_filter( 'use_block_editor_for_post', '__return_false' );

/**
 * Remove unused scripts and styles.
 */
function mywptheme_child_deregister_styles(): void {
	wp_dequeue_style( 'classic-theme-styles' );
}

add_action( 'wp_enqueue_scripts', 'mywptheme_child_deregister_styles', 20 );

/**
 * @param  WP_Error  $access
 *
 * @return WP_Error
 */
function wp_snippet_disable_rest_api( WP_Error $access ): WP_Error {
	return new WP_Error(
		'rest_disabled',
		__( 'The WordPress REST API has been disabled.' ),
		array( 'status' => rest_authorization_required_code() )
	);
}

add_filter( 'rest_authentication_errors', 'wp_snippet_disable_rest_api' );

/**
 * Remove unnecessary meta tags from the head.
 */
function remove_unnecessary_head_tags(): void {
	remove_action( 'wp_head', 'wp_resource_hints', 99 );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	remove_action( 'wp_head', 'robots' );
	remove_filter( 'wp_robots', 'wp_robots_max_image_preview_large' );
	remove_filter( 'the_content', 'wptexturize' );
}

add_action( 'init', 'remove_unnecessary_head_tags' );

/**
 * Fix self-closing link tags.
 */
function disable_self_closing_tags(): void {
	ob_start(
		function ( $input ) {
			return str_replace( '/>', '>', $input );
		}
	);
}

add_action( 'wp_head', 'disable_self_closing_tags', 1 );

/**
 * @return void
 */
function wps_deregister_styles(): void {
	wp_dequeue_style( 'global-styles' );
}

add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );
