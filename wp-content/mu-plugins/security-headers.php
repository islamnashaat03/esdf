<?php
/**
 * Security Headers - Must-Use Plugin
 * 
 * This plugin adds essential security HTTP headers to all WordPress responses.
 * Being a mu-plugin, it loads automatically and cannot be deactivated.
 * 
 * @package     SecurityHeaders
 * @version     1.0.0
 * @author      Your Site
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add security headers to all responses
 */
function esdf_add_security_headers() {
    // Only add headers if not already sent
    if (headers_sent()) {
        return;
    }

    // Prevent clickjacking - only allow framing from same origin
    header('X-Frame-Options: SAMEORIGIN');
    
    // Prevent MIME type sniffing
    header('X-Content-Type-Options: nosniff');
    
    // Enable XSS filter in browsers
    header('X-XSS-Protection: 1; mode=block');
    
    // Control referrer information
    header('Referrer-Policy: strict-origin-when-cross-origin');
    
    // Permissions Policy - restrict browser features
    header("Permissions-Policy: geolocation=(), microphone=(), camera=(), payment=(), usb=()");
    
    // Remove WordPress version from headers
    header_remove('X-Powered-By');
    
    // Content Security Policy (adjust as needed for your site)
    // Uncomment and customize based on your requirements:
    // header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline'; img-src 'self' data: https:; font-src 'self' data:; connect-src 'self';");
}
add_action('send_headers', 'esdf_add_security_headers');

/**
 * Remove WordPress version from various outputs
 */
function esdf_remove_version_info() {
    return '';
}
add_filter('the_generator', 'esdf_remove_version_info');

/**
 * Remove version from scripts and styles
 */
function esdf_remove_version_from_assets($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'esdf_remove_version_from_assets', 9999);
add_filter('script_loader_src', 'esdf_remove_version_from_assets', 9999);

/**
 * Disable XML-RPC
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Remove XML-RPC link from head
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

/**
 * Disable REST API user enumeration
 */
function esdf_disable_rest_user_enum($endpoints) {
    if (isset($endpoints['/wp/v2/users'])) {
        unset($endpoints['/wp/v2/users']);
    }
    if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
        unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
    }
    return $endpoints;
}
add_filter('rest_endpoints', 'esdf_disable_rest_user_enum');

/**
 * Disable author archive enumeration
 */
function esdf_disable_author_enum() {
    if (is_author() && !is_user_logged_in()) {
        wp_redirect(home_url(), 301);
        exit;
    }
}
add_action('template_redirect', 'esdf_disable_author_enum');

/**
 * Hide login errors (don't reveal if username exists)
 */
function esdf_hide_login_errors() {
    return __('Invalid login credentials. Please try again.', 'security-headers');
}
add_filter('login_errors', 'esdf_hide_login_errors');

/**
 * Add security notice in admin
 */
function esdf_security_admin_notice() {
    if (current_user_can('manage_options')) {
        echo '<div class="notice notice-info is-dismissible">';
        echo '<p><strong>🔒 Security Headers Active:</strong> This site has enhanced security headers enabled via mu-plugin.</p>';
        echo '</div>';
    }
}
add_action('admin_notices', 'esdf_security_admin_notice');
