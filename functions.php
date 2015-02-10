<?php

/* 
 * The functions file for the firethorne-base-child-one-page child theme
 */

function one_page_scripts() {
    if ( is_front_page() ) {
        wp_enqueue_style( 'one-page-styles', get_stylesheet_directory_uri() . '/one-page-style.css' );
    }      
}
add_action('wp_enqueue_scripts', 'one_page_scripts');
