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

    <!-- Post content -->
    <div class="single-page-wrapper">
      <?php while ( have_posts() ) : the_post(); ?>

      <div class="featured-project-container">
        <div class="featured-project-image-container">
          <img class="featured-project-image" src="<?php the_post_thumbnail_url('original'); ?>" />
        </div>
        <div class="project-full-text-container">
          <div class="featured-project-title">
            <?php the_title(); ?>
          </div>
          <div class="author">
            <?php echo get_post_meta($post->ID, 'event-author', true); ?>
          </div>
          <?php echo the_content(); ?>
        </div> <!--.project-full-text-container-->
        <?php endwhile; ?>
      </div><!--.featured-project-container-->
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
