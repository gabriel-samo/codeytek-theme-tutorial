<?php

/**
 * Header
 * 
 * @package Aquarius Theme
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aquarius Theme</title> <!-- This will be dynamic -->
  <?php wp_head(); ?>
</head>

<body <?php body_class('mt-20'); ?>>

  <?php
  if (function_exists('wp_body_open')) {
    wp_body_open();
  }
  ?>

  <div id="page" class="site">

    <header id="masthead" class="site-header" role="banner">
      <?php get_template_part('template-parts/header/nav'); ?>
    </header>

    <main id="content" class="site-content">