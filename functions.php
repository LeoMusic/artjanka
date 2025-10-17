<?php
/**
 * Artjanka Child Theme functions and definitions
 *
 * @package Artjanka
 * @since 1.0.0
 */

/**
 * Enqueue parent and child theme styles
 */
function artjanka_enqueue_styles() {
    // Enqueue parent theme style
    wp_enqueue_style(
        'twentytwentyfive-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->parent()->get('Version')
    );
    
    // Enqueue child theme style
    wp_enqueue_style(
        'artjanka-style',
        get_stylesheet_uri(),
        array('twentytwentyfive-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'artjanka_enqueue_styles');
