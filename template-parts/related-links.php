<?php $post_objects = get_field('related_links'); ?>
<?php if( $post_objects ): ?>
  <div class="related-posts">
    <div class="related-posts-title">RELATED</div>
    <!-- variable must be called $post -->
    <?php foreach( $post_objects as $post): ?>
      <?php setup_postdata($post); ?>
      <a class="related-post" href="
        <?php echo get_post_permalink(); ?>
        ">
        <?php the_title(); ?>
      </a>
    <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
  </div>
<?php endif; ?>
