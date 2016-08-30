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
    <?php get_template_part( 'template-parts/featured-project-carousel', 'none' ); ?>

    <!-- Showcase project grid -->
    <div class="showcase-project-container">
      <?php $query = new WP_Query( array( 'category_name' => 'showcase-project' ) );
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="showcase-project">
          <div class="subtitle">
            <?php echo get_post_meta($post->ID, 'showcase-section-title', true) ?>
          </div>

          <a href="#<?php echo esc_url( get_permalink() ); ?>">
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
            <div class="showcase-project-title"><?php the_title(); ?></div>
            <div class="showcase-project-blurb">
              <?php echo get_post_meta($post->ID, 'project-blurb', true); ?></div>
          </a>
        </div><!-- .showcase-project -->
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
              <?php echo "<div class='subtitle'>MISSION</div>"; ?>
              <?php echo get_post_meta($post->ID, 'site-mission', true); ?>
          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>
        </div><!-- .mission-text -->

        <div class="connect-text">
          <?php $query = new WP_Query( array( 'category_name' => 'landing-page' ) );
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
              <?php echo "<div class='subtitle'>CONNECT</div>"; ?>
              <?php echo get_post_meta($post->ID, 'connect', true); ?>
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
