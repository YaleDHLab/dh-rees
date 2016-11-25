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
      $query = new WP_Query( array(
        'post_type' => 'dhrees-news',
        'meta_query' => array(
          array(
            'key' => 'featured',
            'value' => '"featured"',
            'compare' => 'LIKE'
          ) ),
        'posts_per_page' => 1
      ) );

      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        $the_permalink = get_the_permalink();
        $subtitle = "NEWS";
        $button_label = get_field("button_label");

        include(locate_template( 'template-parts/split-hero.php') );

        endwhile; endif;
      wp_reset_postdata(); ?>

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
