<?php
function theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 200,
        'flex-height' => true,
    ) );

    // Set the default Post Thumbnail size
    set_post_thumbnail_size( 200, 200, true ); // 200px wide by 200px high, hard crop mode

    // Add custom image sizes
    add_image_size( 'custom-header', 1200, 400, true ); // Custom header size
}

add_action( 'after_setup_theme', 'theme_setup' );

// Päävalikko
function register_my_menu() {
    register_nav_menu( 'main-menu', __( 'Main Menu' ) );
}

add_action( 'after_setup_theme', 'register_my_menu' );