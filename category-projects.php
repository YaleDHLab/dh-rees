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
    <main id="main" class="site-main" role="main">

      <!-- Featured project carosel -->
      <?php $featured_item_type = 'featured-project';
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
          <?php $query = new WP_Query( array( 'category_name' => 'project' ) );
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <?php if (has_category('featured-project', $post)) {
              continue;
             } ?>

            <div class="project">
              <div class="project-image-container">
                <div class="project-thumbnail">
                  <a href="<?php echo esc_url( get_permalink() ); ?>">
                    <img src="<?php the_post_thumbnail_url('large'); ?>"/>
                  </a>
                </div>
              </div>
              <div class="project-text-container">
                <div class="project-title">
                  <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                </div>
                <div class="author">
	                <?php  $author = get_post_meta($post->ID, 'project-author', true); 
		                	if ($author) {echo $author;}
		                	else {echo '&nbsp;';}
		                		 ?>
	                </div>
              </div>
            </div>

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
