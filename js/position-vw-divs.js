// position divs as a function of viewport width
var positionDivs = function() {

  // only adjust elements on mobile views
  var windowWidth = $(window).width();

  if (windowWidth < 1000) {

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
