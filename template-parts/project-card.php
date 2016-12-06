<a href="<?php the_permalink() ?>" rel="bookmark">
  <div class="project-card">
    <div class="project-card-image-container">
      <div style="background: url(<?php echo the_post_thumbnail_url('large').') no-repeat center center; -webkit-background-size:cover; -moz-background-size:cover; -o-background-size:cover; background-size:cover">'?></div>
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

