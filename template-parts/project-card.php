<a href="<?php the_permalink() ?>" rel="bookmark">
  <div class="project-card">
    <div class="project-card-image-container">
      <img src="<?php the_post_thumbnail_url('large'); ?>"/>
    </div><!--.project-card-image-container-->
    <div class="project-card-text-container">
      <div class="project-card-hover-strip"></div>
      <div class="project-card-title"><?php the_title(); ?></div>
     <div class="project-card-text">
        <?php echo get_field('blurb'); ?>
      </div>
    </div>
  </div>
</a>

