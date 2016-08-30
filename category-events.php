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
      <?php get_template_part( 'template-parts/featured-project-carousel', 'none' ); ?>

      <!-- Upcoming Events column -->
      <div class="upcoming-events-column">
        <div class="upcoming-events-container">
          <div class="upcoming-events-control-row">
            <div class="subtitle-wrapper">
              <div class="subtitle">UPCOMING EVENTS</div>
            </div>
          </div>
          <?php $query = new WP_Query( array( 'category_name' => 'event' ) );
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="upcoming-event">
              <div class="event-text-container">
                <div class="event-hover-strip"></div>
                <div class="event-title"><?php the_title(); ?></div>
                <div class="event-time-line">
                  <?php echo get_post_meta($post->ID, 'event-time-line', true); ?>
                </div>
                <div class="event-text">
                  <?php the_content(); ?>
                </div>
              </div>
              <div class="event-image-container">
                <?php
                  $event_month = get_post_meta($post->ID, 'event-month', true);
                  $event_day = get_post_meta($post->ID, 'event-day', true);
                  if ( strlen($event_month) == 3 && strlen($event_day) > 0) {
                    echo '<div class="image-stripe event-stripe"></div>';
                    echo '<div class="event-stripe-text">';
                      echo '<div class="event-stripe-month">'.$event_month.'</div>';
                      echo '<div class="event-stripe-day">'.$event_day.'</div>';
                    echo '</div>';
                  } else {};
                  unset($event_month);
                  unset($event_day);
                ?>
                <div class="showcase-project-thumbnail">
                  <img src="<?php the_post_thumbnail_url('large'); ?>"/>
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>

      <!-- Parallelograms -->
      <div class="clear-both"></div>
      <?php get_template_part( 'template-parts/contact-parallelograms', 'none' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
