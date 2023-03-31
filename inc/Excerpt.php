<?php

// Custom excerpt length
add_filter(
    'excerpt_length',
    function () {
        if (is_singular('post')) {
            return 23;
        } else {
            return 20;
        }
    }
);
