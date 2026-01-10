<?php
if (!defined('ABSPATH')) exit;

function esdf_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'esdf_theme_setup');

function esdf_enqueue_scripts() {
    wp_enqueue_style('esdf-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'esdf_enqueue_scripts');
