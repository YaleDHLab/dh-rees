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
		<main id="main" class="site-main" role="main">

      <!-- About text column -->
      <div class="about-text-column">
        <div class="image-stripe about-text-stripe"></div>
        <div class="about-text-container">
          <?php $query = new WP_Query( array( 'pagename' => 'about' ) );
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="about-text about-text-title">About Us</div>
            <div class="about-text about-text-main">
              <?php the_content(); ?>
            </div>
          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>

      <!-- Team member cards -->
      <div class="team-member-cards-container">
      <?php $query = new WP_Query( array(
          'post_type' => 'dhrees-team-member', 
          'posts_per_page' => -1,
          'meta_key' => 'display_order',
          'orderby' => 'meta_value_num',
          'order' => 'ASC'
      ) );

        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

          <a href="<?php echo the_permalink(); ?>">
            <div class="team-member-card">
              <div class="team-member-thumbnail">
                <?php the_post_thumbnail('thumbnail'); ?>
              </div>
              <div class="team-member-text-container">
                <div class="team-member-text team-member-name">
                  <?php echo get_field("name"); ?>
                </div>
                <div class="team-member-text team-member-position">
                  <?php echo get_field("position"); ?>
                </div>
              </div><!-- .team-member-text-container -->
              <div class="team-member-hover-stripe"></div>
            </div>
          </a><!-- .team-member-card -->

        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>
      </div><!-- .team-member-cards-container -->

      <!-- Parallelograms -->
      <div class="clear-both"></div>
      <div class="about-page-parallelograms-container">
        <?php get_template_part( 'template-parts/contact-parallelograms', 'none' ); ?>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
