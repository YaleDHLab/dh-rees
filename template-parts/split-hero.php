<?php 
  if (!isset($subtitle) ) { $subtitle = ""; };
  if (!isset($bottom_left_class) ) { $bottom_left_class = ""; };
  if (!isset($bottom_left_text) ) { $bottom_left_text = ""; };
?>

<div class="featured-project-container">
  <?php if (isset($the_permalink) ) { echo "<a href=".$the_permalink.">"; }; ?>
    <div class="featured-project-image-container featured-item-image-container">
      <div class="featured-project-image featured-item-image"
        style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)" ></div>
    </div>
    <div class="featured-item-text-container">
      <div class="featured-item-text-wrap">
        <div class="subtitle"><?php echo $subtitle ?></div>
        <div class="featured-item-title"><?php the_title(); ?></div>
        <div class="<?php echo $bottom_left_class.'">'; ?>
          <?php echo $bottom_left_text ?>
        </div>
        <?php if (isset($button_label) ) {
          echo "<div class='read-more-button button'>".$button_label."</div>";
        } ?>
      </div>
    </div>
  <?php if (isset($the_permalink) ) { echo "</a>"; }; ?>
</div>
