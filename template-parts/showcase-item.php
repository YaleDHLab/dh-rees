<div class="showcase-project">
  <?php $class_name = 'subtitle-wrapper desktop landing-page-subtitle subtitle-';
        $class_name = $class_name.$showcase_section_subtitle;
        echo "<div class='".$class_name."'>"; ?>
    <div class="subtitle">
      <?php echo $showcase_section_subtitle; ?>
    </div>
  </div>

  <a href="<?php echo esc_url( get_permalink() ); ?>">
    <div class="event-stripe-wrapper">
      <?php get_template_part( 'template-parts/event-date', 'none' ); ?>
    </div>
    <div class="showcase-project-thumbnail">
      <img src="<?php the_post_thumbnail_url('large'); ?>"/>
    </div>
    <?php $class_name = 'subtitle-wrapper mobile landing-page-subtitle subtitle-';
          $class_name = $class_name.$showcase_section_subtitle;
          echo "<div class='".$class_name."'>"; ?>
      <div class="subtitle">
        <?php echo $showcase_section_subtitle; ?>
      </div>
    </div>
    <div class="showcase-project-title"><?php the_title(); ?></div>
    <div class="showcase-project-blurb">
      <?php echo get_field('blurb'); ?>
    </div>
  </a>
</div><!-- .showcase-project -->
