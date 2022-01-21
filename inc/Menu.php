<?php

//REGISTER MENU
function register_my_menus()
{
    register_nav_menus([
        //Home
        'menu' => __('Menu'),
    ]);
}

add_action('init', 'register_my_menus');
