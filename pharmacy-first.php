<?php
add_action( 'wp_enqueue_scripts', 'register_styles');
function register_styles() {
    // Pharmacy First
    wp_register_style( 'pharm-first', get_template_directory_uri() . '/assets/css/pharmacy.css');
}

function load_pharmacy_styles() {
    wp_enqueue_style('pharm-first');
}

/* Used to enable Condition Pages
 *
 * To enable:
 * add_filter('enable_condition_pages', function() { });
 */
function enable_condition_pages() {
    $value = false;
    $value = apply_filters('enable_condition_pages', $value);
    return $value;
}