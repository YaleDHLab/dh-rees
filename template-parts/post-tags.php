<?php $terms = get_field('tags'); ?>
<?php if($terms): ?> 
  <div class="tag-links">
    <div class="tag-links-title">TAGS</div>
    <?php foreach( $terms as $term ): ?>
    <?php if( $term->name ): ?>
      <a class="tag-link" href="#<?php echo get_term_link( $term );?>">
        <span><?php echo $term->name; ?></span>
      </a>
    <?php endif; ?>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
