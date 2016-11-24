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

      <!-- Featured project carosel -->
      <?php $featured_item_type = 'featured-event';
        include(locate_template( 'template-parts/featured-item-carousel.php') ); ?>

      <!-- Upcoming Events column -->
      <div class="upcoming-events-column">
        <div class="upcoming-events-container">
          <div class="upcoming-events-control-row">
            <div class="subtitle-wrapper">
              <div class="subtitle">UPCOMING EVENTS</div>
            </div>
          </div>
          <?php $query = new WP_Query( array( 'post_type' => 'dhrees-event', 'posts_per_page' => -1 ) );
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="upcoming-event">
              <a href="<?php the_permalink() ?>" rel="bookmark">
                <?php get_template_part( 'template-parts/event-image', 'none' ); ?>
                <div class="event-text-container">
                  <div class="event-hover-strip"></div>
                  <div class="event-title"><?php the_title(); ?></div>
                  <div class="event-time-line">
                    <?php echo get_field('event_time'); ?>
                  </div>
                  <div class="event-text">
                    <?php echo get_field('blurb') ?>
                  </div>
                </div>
              </a>
            </div>
          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>

      <!-- Parallelograms -->
      <div class="clear-both"></div>
      <div class="events-parallelograms">
        <?php get_template_part( 'template-parts/contact-parallelograms', 'none' ); ?>
      <div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
