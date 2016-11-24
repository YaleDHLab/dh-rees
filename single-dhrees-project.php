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
            <img class="featured-project-image" src="<?php the_post_thumbnail_url('original'); ?>" />
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

        <div class="related-posts">
          <?php $post_objects = get_field('related_links'); ?>
            <?php if( $post_objects ): ?>
              <div class="related-posts-title">RELATED</div>
              <!-- variable must be called $post -->
              <?php foreach( $post_objects as $post): ?>
              <?php setup_postdata($post); ?>
              <a class="related-post" href="#<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

        <div class="tag-links">
          <?php $terms = get_field('tags'); ?>
          <?php if($terms): ?>
            <div class="tag-links-title">TAGS</div>
            <?php foreach( $terms as $term ): ?>
            <?php if( $term->name ): ?>
              <a class="tag-link" href="#<?php echo get_term_link( $term );?>">
                <span><?php echo $term->name; ?></span>
              </a>
            <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

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
