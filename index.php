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
    <div class="featured-project-container">
      <?php $query = new WP_Query( array( 'category_name' => 'featured-project' ) );
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="featured-project-text-container">
          <div class="featured-project-title"><?php the_title(); ?></div>
            <div class="featured-project-blurb"><?php echo get_post_meta($post->ID, 'project-blurb', true); ?>
          </div> 
        </div>

        <div class="featured-project-image-container">
          <div class="featured-project-image-wrapper">
            <img class="featured-project-image" src="<?php the_post_thumbnail_url('original'); ?>" />
          </div>
        </div>
      <?php endwhile; endif; ?>
    </div>


    <!-- Showcase project grid -->
    <div class="showcase-project-container">
      <?php $query = new WP_Query( array( 'category_name' => 'showcase-project' ) );
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <a href="<?php echo esc_url( get_permalink() ); ?>">
          <div class="showcase-project">
            <div class="showcase-project-thumbnail-container">
              <div class="showcase-project-thumbnail">
                <img src="<?php the_post_thumbnail_url('large'); ?>"/>
              </div>
            </div>
            <div class="showcase-project-title"><?php the_title(); ?></div>
            <div class="showcase-project-author">By <?php echo get_post_meta($post->ID, 'project-author', true); ?></div>
          </div>
        </a>
      <?php endwhile; endif; ?>
    </div><!-- ,showcase-project-container -->

    <h2 class="cats"><?php echo get_theme_mod( 'good-looking-cats', 'meow' ); ?></h2>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
