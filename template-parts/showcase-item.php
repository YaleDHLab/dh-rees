<div class="showcase-project">
  <?php $class_name = 'subtitle-wrapper landing-page-subtitle subtitle-';
        $class_name = $class_name.$showcase_section_subtitle;
        echo "<div class='".$class_name."'>"; ?>
    <div class="subtitle">
      <?php echo $showcase_section_subtitle; ?>
    </div>
  </div>

  <a href="<?php echo esc_url( get_permalink() ); ?>">
    <?php
      $event_month = get_post_meta($post->ID, 'event-month', true);
      $event_day = get_post_meta($post->ID, 'event-day', true);
      if ( strlen($event_month) == 3 && strlen($event_day) > 0) {
        echo '<div class="image-stripe event-stripe"></div>';
        echo '<div class="event-stripe-text">';
          echo '<div class="event-stripe-month">'.$event_month.'</div>';
          echo '<div class="event-stripe-day">'.$event_day.'</div>';
        echo '</div>';
      } else {};
      unset($event_month);
      unset($event_day);
      unset($class_name);
    ?>
    <div class="showcase-project-thumbnail">
      <img src="<?php the_post_thumbnail_url('large'); ?>"/>
    </div>
    <div class="showcase-project-title"><?php the_title(); ?></div>
    <div class="showcase-project-blurb">
      <?php if ($showcase_section_type == 'projects') {
        echo get_field('blurb');
      } elseif ($showcase_section_type == 'events') {
        echo get_post_meta($post->ID, 'event-blurb', true);
      } ?>
    </div>
  </a>
</div><!-- .showcase-project -->
