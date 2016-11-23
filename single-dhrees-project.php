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
            <?php echo get_post_meta($post->ID, 'project-author', true); ?>
          </div>
          <?php echo the_content();
          endwhile; // End of the loop. ?>
        </div>
      </div>

      <div class="related-posts">
        <div class="related-posts-title">RELATED</div>
          <?php $post_objects = get_field('related_links'); ?>
          <?php if( $post_objects ): ?>
            <!-- variable must be called $post -->
            <?php foreach( $post_objects as $post): ?>
            <?php setup_postdata($post); ?>
            <a class="related-post" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
      </div>

      <div class="tag-links">
        <div class="tag-links-title">TAGS</div>
          <?php $terms = get_field('tags'); ?>
          <?php foreach( $terms as $term ): ?>
          <?php if( $term->name ): ?>
            <a class="tag-link" href="#<?php echo get_term_link( $term );?>">
              <span><?php echo $term->name; ?></span>
            </a>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
