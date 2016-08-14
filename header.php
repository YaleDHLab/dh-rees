<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Scripts to minify -->
<script src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>

<!-- Fonts -->
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

  <div class="header-blue"></div>
  <div class="header-salmon">
    <div class="header-salmon-image"></div>
  </div>

  <div class="navigation-trapezoid navigation-brand"></div>
  <div class="navigation-trapezoid navigation-blue"></div>
  <div class="navigation-trapezoid navigation-gray"></div>

  <div class="blue-triangle-svg-container">
    <svg class="blue-triangle-svg"></svg>
  </div>

  <div class="baby-blue-stripe"></div>
  <div class="cream-stripe"></div>

  <div class="baby-blue-parallelogram"></div>
  <div class="gray-parallelogram"></div>

  <div class="page-content site-content" id="content">

