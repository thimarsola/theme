<?php
require_once __DIR__ . '/vendor/autoload.php';

// Include classes and functions for formatting and modifying the theme.

// Format phone numbers.
require_once get_template_directory() . '/inc/Format.php';

// Create a WhatsApp link.
require_once get_template_directory() . '/inc/Whatsapp.php';

// Add meta tag for description.
require_once get_template_directory() . '/inc/Description.php';

// Add meta tag for keywords.
require_once get_template_directory() . '/inc/Keywords.php';

// Modify the URL of the site's image.
require_once get_template_directory() . '/inc/Image.php';

// Add custom CSS styles.
require_once get_template_directory() . '/inc/Styles.php';

// Add custom JavaScript.
require_once get_template_directory() . '/inc/Scripts.php';

// Register navigation menus.
require_once get_template_directory() . '/inc/Menu.php';

// Add support for featured images.
require_once get_template_directory() . '/inc/Thumbnails.php';

// Add support for post excerpts.
require_once get_template_directory() . '/inc/Excerpt.php';

// Add support for paginated posts.
require_once get_template_directory() . '/inc/Pagination.php';

// Add support for generating a sitemap.
require_once get_template_directory() . '/inc/Sitemap.php';

// Add custom theme support.
require_once get_template_directory() . '/inc/ThemeSupport.php';

// Disable certain WordPress functions.
require_once get_template_directory() . '/inc/Wordpress.php';

// Add breadcrumbs to the site.
require_once get_template_directory() . '/inc/Breadcrumb.php';

// Get the page title for use in the <head> section.
require_once get_template_directory() . '/inc/Title.php';

// Get the URL for use in the <head> section.
require_once get_template_directory() . '/inc/Url.php';
