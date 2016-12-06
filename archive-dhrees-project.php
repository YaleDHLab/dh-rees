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
    <div class="page-type-category-projects"></div>
    <main id="main" class="site-main dhrees-project-archive" role="main">

      <!-- Featured project carosel -->
      <?php $featured_item_type = 'project';
        include(locate_template( 'template-parts/featured-item-carousel.php') );
      ?>
      
      <!-- Projects column -->
      <div class="projects-column">
        <div class="projects-container">
          <div class="projects-control-row">
            <div class="subtitle-wrapper">
              <div class="subtitle">ALL PROJECTS</div>
            </div>
          </div>
          <!-- posts_per_page argument of -1 returns all posts per page, rather than WP default 10 -->
          <?php $query = new WP_Query( array(
              'post_type' => 'dhrees-project',
              'posts_per_page' => -1,
              'orderby' => array (
                'parent' => 'ASC',
                'Order' => 'ASC',
              ),
              'order' => 'ASC'
            ));
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <!-- Only show projects that have no parents -->
            <!-- Block for posts with parents -->
            <?php if ( $post->post_parent ) {
              // pass
            ?>
            <!-- Block for posts without parents -->
            <?php } else { ?>

              <?php include(locate_template( 'template-parts/project-card.php') ); ?>

            <?php } ?>
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
