<?php

//add_action('init', function () {
//   remove_action('init', 'wp_sitemaps_get_server');
//}, 5);

//custom sitemap
add_filter( 'wp_sitemaps_add_provider', function ($provider, $name) {
   return ( $name == 'users' ) ? false : $provider;
}, 10, 2);