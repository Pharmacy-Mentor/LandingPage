<?php

function register_styles() {
    wp_enqueue_style( 'styles', get_template_directory_uri() .'/assets/styles.css', array(), null );
}
add_action( 'wp_enqueue_scripts', 'register_styles' );

function register_services_post_type() {
    register_post_type('services', array(
        'label' => 'Services',
        'public' => true,
        'menu_icon' => 'dashicons-admin-tools',
//        'supports' => array('service_title', 'service_description')
    ));
}
add_action('init', 'register_services_post_type');
