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
  <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>
    <?php include_once 'template-parts/month-parser.php'; ?>

    <div class="featured-project-container">
      <div class="featured-project-image-container featured-event-image-container">
        <div class="featured-event-text-container">
          <div class="featured-event-text-wrap">
            <div class="subtitle">EVENTS</div>
            <div class="featured-event-title"><?php the_title(); ?></div>
            <div class="featured-event-date">
              <?php $event_date = get_field('event_date');
                $event_month = substr($event_date, 4, 2);
                $month_string = getMonthString($event_month);
                $event_day = substr($event_date, 6, 2);
                $event_time = get_field('event_time');
                $event_location = get_field('event_location');
                echo $month_string." ".$event_day." | ".$event_time." | ".$event_location;
              ?>
            </div>
          </div>
        </div>
        <div class="featured-project-image featured-event-image"
          style="background-image: url(<?php the_post_thumbnail_url('original'); ?>)" ></div>
      </div>
    </div>

    <div class="featured-project-container">
      <div class="event-full-text-container">
        <?php echo the_content();
        endwhile; // End of the loop. ?>
      </div>
    </div>

    <?php $post_objects = get_field('related_links'); ?>
    <?php if( $post_objects ): ?>
      <div class="related-posts">
        <div class="related-posts-title">RELATED</div>
        <!-- variable must be called $post -->
        <?php foreach( $post_objects as $post): ?>
        <?php setup_postdata($post); ?>
        <a class="related-post" href="#<?php the_permalink(); ?>"><?php the_title(); ?></a>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
      </div>
    <?php endif; ?>

    <?php $terms = get_field('tags'); ?>
    <?php if($terms): ?> 
      <div class="tag-links">
        <div class="tag-links-title">TAGS</div>
        <?php foreach( $terms as $term ): ?>
        <?php if( $term->name ): ?>
          <a class="tag-link" href="#<?php echo get_term_link( $term );?>">
            <span><?php echo $term->name; ?></span>
          </a>
        <?php endif; ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <!-- Parallelograms -->
    <div class="clear-both"></div>
    <div class="events-parallelograms">
      <?php get_template_part( 'template-parts/contact-parallelograms', 'none' ); ?>
    </div> 
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
