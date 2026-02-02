<?php
if (!defined('ABSPATH'))
    exit;

function esdf_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'esdf_theme_setup');



/**
 * External Theme Setup
 */
require_once get_template_directory() . '/inc/theme-setup.php';

function esdf_enqueue_scripts()
{
    // Enqueue FontAwesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');
    // Enqueue AOS
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);

    // Enqueue Dashicons
    wp_enqueue_style('dashicons');
    // Enqueue the main stylesheet from assets/css/
    wp_enqueue_style('esdf-bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', array(), '5.3.3');
    wp_enqueue_style('esdf-main-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_template_directory() . '/assets/css/style.css'));

    // Enqueue the main script from assets/js/
    wp_enqueue_script('esdf-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), filemtime(get_template_directory() . '/assets/js/main.js'), true);

}
add_action('wp_enqueue_scripts', 'esdf_enqueue_scripts');

