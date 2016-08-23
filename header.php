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

  <!-- Modal to allow users to join the mailing list -->
  <div class="mailing-list-modal-container hidden">
    <div class="mailing-list-modal">
      <?php echo do_shortcode('[contact-form-7 id="136" title="Join the mailing list"]'); ?>
    </div>
  </div>

  <!-- Header content -->
  <div class="header-blue"></div>

  <!-- Yale logo -->
  <div class="yale-logo">
    <object data="https://s3-us-west-2.amazonaws.com/dh-rees/images/YaleU-logo.svg" type="image/svg+xml">
      <img src="https://s3-us-west-2.amazonaws.com/dh-rees/images/YaleU-logo.png" />
    </object>
  </div>

  <div class="header-salmon">
    <div class="header-salmon-image"></div>
  </div>

  <div class="header-site-title">
    <object data="https://s3-us-west-2.amazonaws.com/dh-rees/images/dhrees-logo.svg" type="image/svg+xml">
      <img src="https://s3-us-west-2.amazonaws.com/dh-rees/images/dhrees-logo.png" />
    </object>
  </div>

  <div class="navigation-trapezoid navigation-brand">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="179 43 74.27 59">
      <defs>
        <filter id="path" x="189.659" y="60.6" width="63.611" height="41.4" filterUnits="userSpaceOnUse">
          <feOffset dy="2" input="SourceAlpha"></feOffset>
          <feGaussianBlur stdDeviation="2" result="blur"></feGaussianBlur>
          <feFlood flood-opacity="0.161"></feFlood>
          <feComposite operator="in" in2="blur"></feComposite>
          <feComposite in="SourceGraphic"></feComposite>
        </filter>
        <filter id="path-2" x="179" y="43" width="54.488" height="41.35" filterUnits="userSpaceOnUse">
          <feOffset dy="2" input="SourceAlpha"></feOffset>
          <feGaussianBlur stdDeviation="2" result="blur-2"></feGaussianBlur>
          <feFlood flood-opacity="0.161"></feFlood>
          <feComposite operator="in" in2="blur-2"></feComposite>
          <feComposite in="SourceGraphic"></feComposite>
        </filter>
      </defs>
      <g id="group-40" transform="translate(185 47)">
        <g class="cls-3" transform="matrix(1, 0, 0, 1, -185, -47)">
          <path id="path-3" data-name="path" class="cls-1" d="M26.408,60.537V42.491L21.5,35.5V64.7H33.944l2.975-4.214H26.408Zm27.268-.3a2.158,2.158,0,0,1-.992-1.785V50.572a5.876,5.876,0,0,0-1.834-4.412,6.062,6.062,0,0,0-4.462-1.834,5.593,5.593,0,0,0-1.487.2l-2.975,4.165h1.537c2.033,0,3.371.644,4.016,1.983l-5.652,3.917h5.949V59.05a5.528,5.528,0,0,0,1.537,3.818,5.773,5.773,0,0,0,3.619,1.983l2.826-3.966a3.981,3.981,0,0,1-2.082-.645Zm-7.933.2a3.628,3.628,0,0,1-2.677-1.091,3.459,3.459,0,0,1-1.14-2.578V54.538l-1.537,1.041a4.913,4.913,0,0,0-2.429,4.214,4.5,4.5,0,0,0,1.934,3.917A7.022,7.022,0,0,0,44.058,64.8a2.9,2.9,0,0,0,.992-.2l2.975-4.214H45.744ZM71.128,46.258a6.436,6.436,0,0,0-4.71-1.934,4.224,4.224,0,0,0-1.14.149L62.3,48.688h2.082A3.9,3.9,0,0,1,68.2,52.505v8.131l4.908-6.991V50.968a6.218,6.218,0,0,0-1.983-4.71ZM66.17,60.537a3.628,3.628,0,0,1-2.677-1.091,3.675,3.675,0,0,1-1.14-2.677V42.491L57.444,35.5V58.306a6.405,6.405,0,0,0,1.934,4.66A6.3,6.3,0,0,0,63.988,64.9a7.369,7.369,0,0,0,1.239-.149l2.925-4.214Z" transform="translate(174.16 29.1)"></path>
        </g>
        <g class="cls-2" transform="matrix(1, 0, 0, 1, -185, -47)">
          <path id="path-4" data-name="path" class="cls-1" d="M17.749,4.165A10.449,10.449,0,0,0,10.808.595L7.883,4.759h1.19a6.436,6.436,0,0,1,4.71,1.934,6.436,6.436,0,0,1,1.934,4.71V21.17A3.475,3.475,0,0,1,14.477,23.8a4.2,4.2,0,0,1-2.975,1.19H7.585L10.511,29.1a9.39,9.39,0,0,0,2.281.248,7.488,7.488,0,0,0,5.5-2.281,7.264,7.264,0,0,0,2.33-5.3V11.6a10.842,10.842,0,0,0-2.876-7.437ZM2.975,11.7V22.955a2.024,2.024,0,0,1-.942,1.735A3.358,3.358,0,0,1,0,25.384L2.727,29.35A5.832,5.832,0,0,0,6.4,27.318,6.179,6.179,0,0,0,7.883,23.2V4.66L2.975,11.7Zm39.514-4.71L37.58,0V29.2h4.908V6.991ZM29.747,13.931V6.941L24.839,0V29.2h4.908V18.245h4.908l2.925-4.264H29.747Z" transform="translate(185 47)"></path>
        </g>
      </g>
    </svg>

  </div>
  <div class="navigation-trapezoid navigation-blue">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
  </div>
  <div class="navigation-trapezoid navigation-gray"></div>

  <div class="page-content site-content" id="content">

