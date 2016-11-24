<div class="events-column">
  <div class="events-container">
    <div class="events-control-row">
      <div class="subtitle-wrapper">
        <div class="subtitle"><?php echo $event_label ?></div>
      </div>
    </div>

    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="event">
        <a href="<?php the_permalink() ?>" rel="bookmark">
          <?php get_template_part( 'template-parts/event-image', 'none' ); ?>
          <div class="event-text-container">
            <div class="event-hover-strip"></div>
            <div class="event-title"><?php the_title(); ?></div>
            <div class="event-time-line">
              <?php echo get_field('event_time'); ?>
            </div>
            <div class="event-text">
              <?php echo get_field('blurb') ?>
            </div>
          </div>
        </a>
      </div>
    <?php endwhile; ?>
  </div>
</div>

