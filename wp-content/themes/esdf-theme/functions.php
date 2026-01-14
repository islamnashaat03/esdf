<?php
if (!defined('ABSPATH')) exit;

function esdf_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'esdf_theme_setup');



/**
 * External Theme Setup
 */
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/acf-fields.php';

function esdf_enqueue_scripts() {
    // Enqueue the main stylesheet from assets/css/
    wp_enqueue_style('esdf-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'esdf_enqueue_scripts');

