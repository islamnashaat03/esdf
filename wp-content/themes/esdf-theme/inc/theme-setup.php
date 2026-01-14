<?php
if (!defined('ABSPATH')) exit;

/**
 * Register Navigation Menus
 */
function mytheme_register_nav_menu(){
    register_nav_menus( array(
        'main_menu' => __( 'main_menu', 'text_domain' ),
        'footer-menu-1' => __( 'footer-menu-1', 'text_domain' ),
        'footer-menu-2' => __( 'footer-menu-2', 'text_domain' )
    ) );
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );

/**
 * ACF Options Page
 */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

/**
 * Disable Admin Bar for non-admins (optional, but requested in previous steps generally)
 * Keeping it as user had it.
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Language Helper Function
 */
function lang_in($en, $ar){
    if(defined('ICL_LANGUAGE_CODE')) {
        if(ICL_LANGUAGE_CODE == 'ar'){
            echo $ar;
        } elseif (ICL_LANGUAGE_CODE == 'en'){
            echo $en;
        }
    } else {
        // Fallback or default behavior if WPML/Polylang not active
        echo $en; 
    }
}
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );