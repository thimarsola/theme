<?php


/**
 * @param string $file
 * @return string
 */
function assets(string $file): string
{
    return get_template_directory_uri() . '/dist/' . $file;
}

/**
 * @param string $file
 * @return string
 */
function image(string $file): string
{
    return get_template_directory_uri() . '/dist/images/' . $file;
}

/**
 * Function for create a picture tag for images
 * @param string $name
 * @param string $alt
 * @param string $extension
 * @return string
 */
function picture(string $name, string $alt, string $class = null, string $extension = 'jpg'): string
{
    return '
        <picture>
            <source srcset="'. image($name) . '.webp" type="image/webp">
            <img class="' . $class . '" src="'. image($name) . '.' . $extension . '" alt="' . $alt .'" title="' . $alt
        .'" loading="lazy">
        </picture>
        ';
}

/**
 * Function for create a custom thumbnail size
 */
function ms_setup() {
    add_image_size( 'og-image', 700, 500, true );
    add_image_size( 'post-image', 730, 350, true );
}
add_action( 'after_setup_theme', 'ms_setup' );