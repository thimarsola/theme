<?php

// Custom Sitemap
add_filter( 'wp_sitemaps_add_provider', function ( $provider, $name ) {
    if ( $name === 'users' ) {
        return false;
    }

    return $provider;
}, 10, 2 );