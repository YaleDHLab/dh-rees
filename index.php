<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <!-- Featured project carosel -->
    <?php $featured_item_type = 'featured-project';
      include(locate_template( 'template-parts/featured-item-carousel.php') ); ?>

    <!-- Showcase project and event grid -->
    <div class="showcase-project-container">

      <!-- Showcase project -->
      <?php $query = new WP_Query( array( 'category_name' => 'showcase-project' ) );
        $project_count = 0;
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <?php $showcase_section_type = 'projects';
          $showcase_section_subtitle = "WHAT'S NEW" ?>

        <?php $project_count = $project_count + 1;
          if ($project_count == 1) {
            include(locate_template( 'template-parts/showcase-item.php') );
        } ?>

        <?php endwhile; endif; ?>
      <?php wp_reset_postdata(); ?>

      <!-- Showcase event -->
      <?php $query = new WP_Query( array( 'category_name' => 'showcase-event' ) );
        $event_count = 0;
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <?php $showcase_section_type = 'events';
          $showcase_section_subtitle = 'EVENTS' ?>

        <?php $event_count = $event_count + 1;
          if ($event_count == 1) {
            include(locate_template( 'template-parts/showcase-item.php') );
        } ?>
        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>
      </div><!-- .showcase-project-container -->

      <!-- Parallelograms -->
      <?php get_template_part( 'template-parts/contact-parallelograms', 'none' ); ?>

      <!-- Mission and Connect -->
      <div class="mission-and-connect-container">
        <div class="mission-text">
          <?php $query = new WP_Query( array( 'category_name' => 'landing-page' ) );
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="subtitle-wrapper landing-page-subtitle">
                <?php echo "<div class='subtitle'>MISSION</div>"; ?>
              </div>
              <div class="mission-text-content">
                <?php echo get_post_meta($post->ID, 'site-mission', true); ?>
              </div>
          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>
        </div><!-- .mission-text -->

        <div class="connect-text">
          <?php $query = new WP_Query( array( 'category_name' => 'landing-page' ) );
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="subtitle-wrapper landing-page-subtitle">
                <?php echo "<div class='subtitle'>CONNECT</div>"; ?>
              </div>
              <div class="connect-text-content">
                <?php echo get_post_meta($post->ID, 'connect', true); ?>
              </div>
          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>
        </div><!-- .connect-text -->
        <div class="clear-both"></div>
      </div><!-- .mission-and-connect-container -->

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
