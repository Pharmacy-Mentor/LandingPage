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

/*
 * Handles the background colour for the buttons on hover.
 */
function custom_button_background_colour() {
    $pfButtonColour = get_field('pf_button_hover_colour');
    if ($pfButtonColour) {
        echo '<style>
            .read-more-btn:hover { background: ' . esc_attr($pfButtonColour) . ' !important; }
            </style>';
    }
}

/*
 * Handles the text colour for the buttons on hover.
 */
function custom_button_text_colour() {
    $pfButtonTextColour = get_field('pf_button_text_hover_colour');
    if ($pfButtonTextColour) {
        echo '<style>
            .read-more-btn:hover { color: ' . esc_attr($pfButtonTextColour) . ' !important; }
            </style>';
    }
}

add_action('wp_head', 'custom_button_background_colour');
add_action('wp_head', 'custom_button_text_colour');