<?php

/**
 * Theme Functions
 * 
 * @package Aquarius Theme
 */

/*
  ==================================================
    Enqueue Scripts and Styles
  ==================================================
*/
function aquarius_enqueue_scripts() {
  // Enqueue Tailwind CSS
  wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/build/css/tailwind.css', [], filemtime(get_template_directory() . '/build/css/tailwind.css'), 'all');
}

add_action('wp_enqueue_scripts', 'aquarius_enqueue_scripts');
