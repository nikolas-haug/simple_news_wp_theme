<?php

// Theme support
function news_wp_theme_support() {
    // Post thumbnails
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'news-thumb', 400, 200 );
    add_image_size( 'news-large', 790, 380 );
    add_image_size( 'news-popular', 300, 150 );

    // Nav menus
    register_nav_menus( array(
        'primary' => 'Primary Menu'
    ));
}
add_action( 'after_setup_theme', 'news_wp_theme_support' );