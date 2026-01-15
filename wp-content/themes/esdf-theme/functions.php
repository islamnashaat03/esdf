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

function esdf_enqueue_scripts() {
    // Enqueue the main stylesheet from assets/css/
    wp_enqueue_style('esdf-bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', array(), '5.3.3');
    wp_enqueue_style('esdf-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_template_directory() . '/assets/css/style.css'));
}
add_action('wp_enqueue_scripts', 'esdf_enqueue_scripts');

