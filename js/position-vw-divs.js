// position divs as a function of viewport width
var positionDivs = function() {

  var windowWidth = $(window).width();

  // desktop styles

  /***
  * NB: use Modernizr.mq to check width, rather than jquery width
  * as the latter doesn't account for the scrollbar width evidently
  ***/
  if (Modernizr.mq('(min-width: 1000px)')) {

    var featuredImageHeight = windowWidth * .36;
    $(".featured-project-image-container").css({
      height: featuredImageHeight
    });

    var showcaseImageHeight = windowWidth * .14;
    $(".showcase-project-thumbnail").css({
      height: showcaseImageHeight
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

    var subtitles = $(".landing-page-subtitle");
    subtitles.each(function() {
      $(this).css({
        top: imageHeight + 7
      });
    });

  };
};

$(document).ready(positionDivs);
$(window).on("load resize", positionDivs);
window.addEventListener("orientationchange", positionDivs);
