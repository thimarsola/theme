<?php

/**
 * Returns the URL for a file in the 'dist' directory.
 *
 * @param  string  $file  The file name to get the URL for.
 *
 * @return string The URL for the file.
 */
function get_assets( string $file ): string {
	return get_template_directory_uri() . '/dist/' . $file;
}

/**
 * Returns the URL for an image in the 'dist/images' directory.
 *
 * @param  string  $file  The image name to get the URL for.
 *
 * @return string The URL for the image.
 */
function get_image( string $file ): string {
	return get_template_directory_uri() . '/dist/images/' . $file;
}

/**
 * Generates an HTML picture tag for an image.
 *
 * @param  string  $name  The image name without the file extension.
 * @param  string  $alt  The alternate text for the image.
 * @param  string|null  $class  Optional. The CSS class for the image. Default is null.
 * @param  string  $extension  Optional. The file extension for the image. Default is 'jpg'.
 *
 * @return string The HTML for the picture tag.
 */
function get_picture( string $name, string $alt, string $class = null, string $extension = 'jpg' ): string {
	return '
        <picture>
            <source srcset="' . get_image( $name ) . '.webp" type="image/webp">
            <img class="' . esc_attr( $class ) . '" src="' . get_image( $name ) . '.' . esc_attr( $extension ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">
        </picture>
    ';
}


/**
 * Sets up custom image sizes for the theme.
 */
function ms_setup(): void {
	add_image_size( 'og-image', 700, 500, true );
	add_image_size( 'post-image', 730, 350, true );
}

add_action( 'after_setup_theme', 'ms_setup' );
