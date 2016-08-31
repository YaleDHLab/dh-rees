<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <div class="page-type-single"></div>
    <main id="main" class="site-main" role="main">

      <?php
        $post = $wp_query->post;

        if ( in_category( 'project' ) ) {
          include( TEMPLATEPATH.'/single-project.php' );
        }
        else {
          include( TEMPLATEPATH.'/single-generic.php' );
        }
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
