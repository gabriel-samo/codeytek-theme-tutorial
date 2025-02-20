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
  // Register styles
  wp_register_style('tailwind-css', get_template_directory_uri() . '/assets/css/tailwind.css', [], filemtime(get_template_directory() . '/assets/css/tailwind.css'), 'all');
  
  // Enqueue styles
  wp_enqueue_style('tailwind-css');

  // Register scripts
  wp_register_script('main-js', get_template_directory_uri() . '/src/js/main.js', [], filemtime(get_template_directory() . '/src/js/main.js'), true);

  // Enqueue scripts
  wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'aquarius_enqueue_scripts');
