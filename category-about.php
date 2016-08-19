<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <!-- About text column -->
      <div class="about-text-column">
        <div class="image-stripe about-text-stripe"></div>
        <div class="about-text-container">
          <?php $query = new WP_Query( array( 'category_name' => 'about-text' ) );
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="about-text about-text-title">
              <?php echo get_post_meta($post->ID, 'about-title', true); ?>
            </div>
            <div class="about-text about-subtitle">
              <?php echo get_post_meta($post->ID, 'about-subtitle', true); ?>
            </div>
            <div class="about-text about-text-main">
              <?php the_content(); ?>
            </div>
          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
