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
    <div class="page-type-single single-project"></div>
		<main id="main" class="site-main" role="main">

      <!-- Post content -->
      <?php while ( have_posts() ) : the_post(); ?>

      <div class="featured-project-container">
        <div class="featured-project-text-container">
          <div class="subtitle-wrapper">
            <div class="subtitle">Project</div>
          </div>
          <div class="featured-project-title"><?php the_title(); ?></div>
          <div class="featured-project-blurb">
            <?php echo get_post_meta($post->ID, 'project-blurb', true); ?>
          </div>
        </div>
        <div class="featured-project-image-container">
          <div class="image-stripe featured-image-stripe"></div>
          <img class="featured-project-image" src="<?php the_post_thumbnail_url('original'); ?>" />
        </div>
      </div>      
      <div class="project-full-text-container">
        <?php echo the_content() ?>
      </div>

      <?php
          echo '<div class="post-author">';
          echo get_post_meta($post->ID, 'project-blurb', true);
          echo '</div>';
        endwhile; // End of the loop.
      ?>

      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
