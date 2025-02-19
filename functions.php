<?php

/*
  ==================================================
    Enqueue Scripts and Styles
  ==================================================
*/
function aquarius_enqueue_scripts() {
  // Enqueue Tailwind CSS
  wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/build/css/tailwind.css');
}

add_action('wp_enqueue_scripts', 'aquarius_enqueue_scripts');
