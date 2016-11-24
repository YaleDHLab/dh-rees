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

      <!-- Upcoming Events -->
      <?php $current_date = date('ymd');
        $query = new WP_Query( array(
        'post_type' => 'dhrees-event',
        'posts_per_page' => -1,
        'meta_key' => 'event_date',
        'order' => 'DESC',
        'meta_query'=> array(
          array(
            'key' => 'event_date',
            'compare' => '>=',
            'value' => $current_date,
            'type' => 'DATE',
          ) ),
      ) );
      if ( $query->have_posts() ) : ?>
        <?php $event_label = "UPCOMING EVENTS" ?>
        <?php include(locate_template('template-parts/event-cards.php')); ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

      <!-- Past Events -->
      <?php
        $query = new WP_Query( array(
        'post_type' => 'dhrees-event',
        'posts_per_page' => -1,
        'meta_key' => 'event_date',
        'order' => 'ASC',
        'meta_query'=> array(
          array(
            'key' => 'event_date',
            'compare' => '<',
            'value' => $current_date,
            'type' => 'DATE',
          ) ),
      ) );
      if ( $query->have_posts() ) : ?>
        <?php $event_label = "PAST EVENTS" ?>
        <?php include(locate_template('template-parts/event-cards.php')); ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

      <!-- Parallelograms -->
      <div class="clear-both"></div>
      <div class="events-parallelograms">
        <?php get_template_part( 'template-parts/contact-parallelograms', 'none' ); ?>
      <div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
