<?php
// Enqueue Styles and Scripts
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function load_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'load_font_awesome');

// Add Theme Support for Features
function my_theme_setup() {
    add_theme_support( 'title-tag' );  // Automatic title tags
    add_theme_support( 'post-thumbnails' );  // Featured images
    register_nav_menus( array(
        'main-menu' => __( 'Main Menu', 'my-wine-theme' )
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

function register_wine_post_type() {
    $labels = array(
        'name' => 'Wines',
        'singular_name' => 'Wine',
        'add_new' => 'Add New Wine',
        'add_new_item' => 'Add New Wine',
        'edit_item' => 'Edit Wine',
        'new_item' => 'New Wine',
        'view_item' => 'View Wine',
        'search_items' => 'Search Wines',
        'not_found' => 'No wines found',
        'not_found_in_trash' => 'No wines found in Trash',
        'all_items' => 'All Wines',
        'menu_name' => 'Wines',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'menu_icon' => 'dashicons-carrot',  // Custom icon for the menu
        'rewrite' => array('slug' => 'wines'),  // URL slug
    );

    register_post_type('wine', $args);
}

add_action('init', 'register_wine_post_type');