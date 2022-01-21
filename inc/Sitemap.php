<?php

add_action('init', function () {
    remove_action('init', 'wp_sitemaps_get_server');
}, 5);