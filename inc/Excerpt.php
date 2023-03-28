<?php

// Custom excerpt length
add_filter( 'excerpt_length', function ( $length ) {
    return 15;
} );