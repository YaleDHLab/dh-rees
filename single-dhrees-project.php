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
  <main id="main" class="site-main dhrees-project-page" role="main">

    <!-- Check to see if this project has children projects -->
    <?php $args = array(
      'post_type' => 'dhrees-project',
      'posts_per_page' => -1,
      'post_status' => 'publish',
      'order' => 'ASC',
      'post_parent' => $post->ID
    );
    $loop = new WP_Query( $args ); ?>

    <!-- Block for posts that have children -->
    <?php if ($loop->have_posts()) : ?>

      <!-- Featured project carosel -->
      <?php $featured_item_type = 'project';
        include(locate_template( 'template-parts/featured-item-carousel.php') ); ?>

      <div class="projects-container">
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
          <?php include(locate_template( 'template-parts/project-card.php') ); ?>
        <?php endwhile; ?>
      </div>

    <!-- Block for posts that have no children -->
    <?php else : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <div class="featured-project-container">
          <div class="featured-project-image-container">
            <div class="featured-project-image" style="background-image: url(<?php the_post_thumbnail_url('original'); ?>)" ></div>
          </div>
        </div>

        <div class="featured-project-container">
          <div class="project-full-text-container">
            <div class="featured-project-title">
              <?php the_title(); ?>
            </div>
            <div class="author">
              <?php echo get_post_meta($post->ID, 'project-author', true); ?>
            </div>
            <?php echo the_content();
            endwhile; // End of the loop. ?>
          </div>
        </div>

        <?php include(locate_template( 'template-parts/related-links.php') ); ?>
        <?php include(locate_template( 'template-parts/post-tags.php') ); ?>

      <?php endif; ?>

      <!-- Parallelograms -->
      <div class="clear-both"></div>
      <div class="events-parallelograms">
        <?php get_template_part( 'template-parts/contact-parallelograms', 'none' ); ?>
      <div>

    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
