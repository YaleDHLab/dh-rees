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
  <div class="single-page single-project"></div>
  <main id="main" class="site-main dhrees-resource-page" role="main">

    <?php // pluck off the first resource for the hero
      $post_count = 0;
      while ( have_posts() ) : the_post();
        $post_count += 1;
        if ($post_count == 1) {
          $subtitle = "RESOURCE";
          $button_label = get_field("button_label"); 
          include(locate_template( 'template-parts/split-hero.php') );
        } ?>
    <?php endwhile; ?>

    <div class="featured-project-container">
      <div class="text-results">
        <div class="text-results-wrapper">
          <?php while ( have_posts() ) : the_post();
            include(locate_template( 'template-parts/text-results.php') );
          endwhile; ?>
        </div>
      </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
