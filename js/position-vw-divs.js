// position divs as a function of viewport width
var positionDivs = function() {

  var windowWidth = $(window).width();

  // desktop styles

  /***
  * NB: use Modernizr.mq to check width, rather than jquery width
  * as the latter doesn't account for the scrollbar width evidently
  ***/
  if (Modernizr.mq('(min-width: 1000px)')) {

    var featuredImageHeight = windowWidth * .332;
    $(".featured-project-image-container").css({
      height: featuredImageHeight
    });

    var showcaseImageHeight = windowWidth * .1245;
    $(".showcase-project-thumbnail").css({
      height: showcaseImageHeight
    });

    var parallelogramContainerHeight = windowWidth * .12;
    $(".parallelogram-container").css({
      height: parallelogramContainerHeight
    });

    var grayParallelogramHeight = windowWidth * .12;
    $(".gray-parallelogram").css({
      height: grayParallelogramHeight
    });

  } else {

    /***
    * Treat featured image assets
    ***/

    var imageHeight = windowWidth * .54;

    // adjust the featured project image
    var featuredProject = $(".featured-project-image-container");
    featuredProject.css({
      height: imageHeight
    });

    // adjust the showcase projects
    var showcaseProjects = $(".showcase-project-thumbnail");
    showcaseProjects.each(function() {
      $(this).css({
        height: imageHeight
      });
    });

    // adjust subtitles
    var subtitles = $(".landing-page-subtitle");
    subtitles.each(function() {
      $(this).css({
        top: imageHeight + 7
      });
    });

    // set the parallelogram height
    var parallelogramContainerHeight = windowWidth * .24;
    $(".parallelogram-container").css({
      height: parallelogramContainerHeight
    });

    // the gray parallelogram height
    var grayParallelogramHeight = windowWidth * .24;
    $(".gray-parallelogram").css({
      height: grayParallelogramHeight
    });

  };
};

$(document).ready(positionDivs);
$(window).on("load resize", positionDivs);
window.addEventListener("orientationchange", positionDivs);
