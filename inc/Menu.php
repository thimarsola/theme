<?php

//REGISTER MENU
function register_my_menu(): void {
    register_nav_menus( [
        'menu' => __( 'Menu' ),
    ] );
}

add_action( 'init', 'register_my_menu' );
