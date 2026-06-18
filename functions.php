<?php

// Theme Setup
function rajpoot_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'rajpoot-theme'),
    ));
}
add_action('after_setup_theme', 'rajpoot_theme_setup');

// Enqueue Styles & Scripts
function rajpoot_enqueue_scripts() {
    wp_enqueue_style('google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap',
        array(), null
    );
    wp_enqueue_style('font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(), '6.4.0'
    );
    wp_enqueue_style('rajpoot-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('rajpoot-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(), '1.0.0', true
    );
}
add_action('wp_enqueue_scripts', 'rajpoot_enqueue_scripts');

// Widget Areas
function rajpoot_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'rajpoot-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'rajpoot-theme'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'rajpoot_widgets_init');

// Custom Excerpt Length
function rajpoot_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'rajpoot_excerpt_length');