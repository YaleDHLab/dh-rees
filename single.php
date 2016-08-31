<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

  $post = $wp_query->post;

  if ( in_category( 'project' ) ) {
    include( TEMPLATEPATH.'/single-project.php' );
  }
  elseif ( in_category( 'event' ) ) {
    include( TEMPLATEPATH.'/single-event.php' );
  }
  else {
    include( TEMPLATEPATH.'/single-generic.php' );
  }
?>


