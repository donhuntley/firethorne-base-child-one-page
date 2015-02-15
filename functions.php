<?php

/* 
 * The functions file for the firethorne-base-child-one-page child theme
 */

function one_page_scripts() {
    if ( is_front_page() ) {
        wp_enqueue_style( 'one-page-styles', get_stylesheet_directory_uri() . '/one-page-style.css' );
        wp_enqueue_script( 'one-page-script', get_stylesheet_directory_uri() . '/js/one-page-scripts.js', array('jquery'), '20150214');
    }      
}
add_action('wp_enqueue_scripts', 'one_page_scripts');

add_image_size( 'testimonial-mug', 253, 253, true);

/* Exclude testimonials and portfolios from index pages */
/* Disable because this removes these categories from All Posts list on administration page */
/*
function exclude_testimonials( $query ) {
    if ( !$query->is_category('testimonial') && $query->is_main_query() ) {
        $query->set( 'cat', '-4' );
    }
}
add_action( 'pre_get_posts', 'exclude_testimonials' );

function exclude_portfolios( $query ) {
    if ( !$query->is_category('portfolio') && $query->is_main_query() ) {
        $query->set( 'cat', '-5' );
    }
}
add_action( 'pre_get_posts', 'exclude_portfolios' );
*/