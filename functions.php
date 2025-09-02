<?php

// Adds dynamic title tag
function addTitle() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'addTitle');

// Adds style.css
add_action('wp_enqueue_scripts', function () {
    // Loads /style.css from the active theme (child-safe)
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version') // cache-busts when you bump theme version
    );
});

// Enqueue compiled tailwind styles
add_action('wp_enqueue_scripts', function () {
    $rel = '/assets/css/main.css';
    wp_enqueue_style(
        'theme-tailwind',
        get_stylesheet_directory_uri() . $rel,
        [],
        file_exists(get_stylesheet_directory() . $rel) ? filemtime(get_stylesheet_directory() . $rel) : null
    );
});


// Adds Main.js
add_action('wp_enqueue_scripts', function () {
    $handle = 'theme-main';
    $rel_path = '/main.js'; 
    $src  = get_stylesheet_directory_uri() . $rel_path;
    $path = get_stylesheet_directory() . $rel_path;

    wp_enqueue_script(
        $handle,
        $src,
        [],                                  
        file_exists($path) ? filemtime($path) : null,
        true                                 
    );
});

// Adds dynamic navigation menu items
add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary' => __('Primary Menu', 'your-textdomain'),
    ]);
});
