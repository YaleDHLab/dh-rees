// position divs as a function of viewport width
var positionDivs = function() {

  var windowWidth = $(window).width();

  // desktop styles

  /***
  * NB: use Modernizr.mq to check width, rather than jquery width
  * as the latter doesn't account for the scrollbar width evidently
  ***/
  if (Modernizr.mq('(min-width: 1000px)')) {

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
