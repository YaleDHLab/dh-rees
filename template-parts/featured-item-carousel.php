<div class="featured-project-container page-lane">
  <script>
    var query_results = [];
    var carousel_type = "<?php echo $featured_item_type ?>";
  </script>

  <?php
  if ($featured_item_type == "project") {
    $query = new WP_Query( array(
      'post_type' => "dhrees-project",
      'meta_query' => array(
        array(
          'key' => 'featured',
          'value' => '"featured"',
          'compare' => 'LIKE'
        ) )
    ) );
  };

  if ($featured_item_type == "event") {
    $query = new WP_Query( array(
      'post_type' => "dhrees-event",
      'posts_per_page' => 1,
      'meta_key' => 'event_date',
      'order' => 'ASC'
    ) );
  };

  // build a JSON array of query results
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <script>
      query_results.push({
        "post": <?php echo json_encode($post); ?>,
        "thumbnail_url": "<?php echo the_post_thumbnail_url(); ?>",
        "title": "<?php echo the_title(); ?>",
        "blurb": "<?php echo get_field('blurb'); ?>",
        "post_url": "<?php echo esc_url( get_permalink() ); ?>",
        "event_date": "<?php echo get_field('event_date') ?>"
      });
    </script>
  <?php endwhile; endif; ?>

  <!-- Generate carousel template -->
  <a href="#" class="featured-project-link">
    <div class="featured-project-text-container">
      <div class="subtitle-wrapper desktop">
        <div class="subtitle"></div>
      </div>
      <div class="featured-project-title desktop"></div>
      <div class="featured-project-blurb desktop"></div>
      <div class="featured-project-button-container">
        <div class="button featured-project-button">View <?php echo $featured_item_type ?></div>
      </div>
    </div>

    <div class="featured-project-image-container">
    <div class="image-stripe featured-image-stripe"></div>
      <img class="featured-project-image" />
      <img class="featured-project-background-image" />
    </div>
    <div class="subtitle-wrapper mobile">
      <div class="subtitle"></div>
    </div>
    <div class="featured-project-title mobile"></div>
    <div class="featured-project-blurb mobile"></div>
  </a>

  <!-- Write the JSON target to the carousel -->
  <script>

  /***
  * Provide content for the subtitles
  ***/

  var updateSubtitles = function() {
    // if this is a project carousel, the subtitle should say "Feature"
    // if this is an event carousel, the subtitle should be a date
    if (carousel_type == "project") {
      $(".subtitle").each(function() {
        $(this).text("Feature");
      });
    };

    if (carousel_type == "event") {
      var day = query_results[0]["event_date"].substring(6, 8);
      var month = query_results[0]["event_date"].substring(4, 6);
      switch (month) {
        case "01":
          var monthString = "January";
          break;

        case "02":
          var monthString = "February";
          break;

        case "03":
          var monthString = "March";
          break;

        case "04":
          var monthString = "April";
          break;

        case "05":
          var monthString = "May";
          break;

        case "06":
          var monthString = "June";
          break;

        case "07":
          var monthString = "July";
          break;

        case "08":
          var monthString = "August";
          break;

        case "09":
          var monthString = "September";
          break;

        case "10":
          var monthString = "October";
          break;

        case "11":
          var monthString = "November";
          break;

        case "12":
          var monthString = "December";
          break;
      }

      $(".subtitle").each(function() {
        $(this).text(monthString + " " + day);
      });
    };
  };

  /***
  * Use current state to update the featured project
  ***/

  var setFeaturedProject = function(projectIndex) {
    var imgSrc = $(".featured-project-image");
    $(imgSrc).attr("src", query_results[projectIndex].thumbnail_url);

    var backgroundImgSrc = $(".featured-project-background-image");
    var backgroundImgIdx = (projectIndex + 1) % query_results.length;
    $(backgroundImgSrc).attr("src", query_results[backgroundImgIdx].thumbnail_url);
  }

  /***
  * Use the current state to update the project text
  ***/

  var updateText = function(projectIndex) {

    var link = $(".featured-project-link");
    $(link).attr("href", query_results[projectIndex].post_url);

    var title = $(".featured-project-title.desktop");
    $(title).text(query_results[projectIndex].title);

    var mobileTitle = $(".featured-project-title.mobile");
    $(mobileTitle).text(query_results[projectIndex].title);

    var blurb = $(".featured-project-blurb.desktop");
    $(blurb).text(query_results[projectIndex].blurb);

    var mobileBlurb = $(".featured-project-blurb.mobile");
    $(mobileBlurb).text(query_results[projectIndex].blurb);
  }

  /***
  * Loop through projects
  ***/

  var projectIndex = 0;

  var requestProjectUpdate = function() {
    setTimeout(function() {

      // identify the next project
      projectIndex = (projectIndex+1) % query_results.length;

      // first fade the top image and text out
      $(".featured-project-image").css({ opacity: 0 });
      $(".featured-project-text-container").css({ opacity: 0 });

      // update the text box using the text for the background image
      setTimeout(function() {
        updateText(projectIndex);
      }, 160);

      // fade the text in
      setTimeout(function() {
        $(".featured-project-text-container").css({ opacity: 1 });
      }, 200);

      // make the foreground identical to the background image
      setTimeout(function() {
        var imgSrc = $(".featured-project-image");
        $(imgSrc).attr("src", query_results[projectIndex].thumbnail_url);
      }, 1200);

      // fade in the foreground image
      setTimeout(function() {
        $(".featured-project-image").css({ opacity: 1 });
      }, 2000);

      // queue the next image up in the background
      setTimeout(function() {
        var backgroundImgSrc = $(".featured-project-background-image");
        var nextProject = (projectIndex + 1) % query_results.length;
        backgroundImgSrc.attr("src", query_results[nextProject].thumbnail_url);
      }, 3000);

      // place another update on the event stack
      requestProjectUpdate();
    }, 5000);
  }

  updateSubtitles();
  setFeaturedProject(projectIndex);
  updateText(projectIndex);

  // only flip through projects if there is more than one project
  if (query_results.length > 1) {
    requestProjectUpdate();
  }
  </script>

</div>
