var moveShapes = function() {
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();
  var rootTwo = Math.pow(2, 0.5);

  /***
  * The following changes apply only to large viewports
  ***/

  if (windowWidth > 1000) {

    /***
    * Header
    ***/

    /***
    * Because the triangles in the top right of the page should grow
    * proportionally with the document, and because they're rotated,
    * they grow as a power of root two
    ***/

    var blueHeaderWidth =  rootTwo * windowWidth * .27;

    $(".header-blue").css({
      "height": blueHeaderWidth + "px",
      "width": blueHeaderWidth + "px",
      "top": "-" + blueHeaderWidth/2 + "px",
      "left": "-" + (blueHeaderWidth/2) -100 + "px"
    });

    var salmonHeaderWidth = rootTwo * windowWidth * (.27 + .155);

    $(".header-salmon").css({
      "height": salmonHeaderWidth + "px",
      "width": salmonHeaderWidth + "px",
      "top": "-" + salmonHeaderWidth/2 + "px",
      "left": "-" + (salmonHeaderWidth/2) -100 + "px"
    });

    /***
    * Navigation
    ***/

    /***
    * To calculate the blue nav bar's left offset, compute:
    * ((rootTwo * header-salmon's width) / 2 ) - offset
    * 
    * the offset should be = 75px + (1.61% viewport width)
    * 75 because we want an overlap between blue navigation and the red image div
    * and because of the translation applied to the blue div
    ***/

    var blueNavigationLeft = (rootTwo * $(".header-salmon").width()) / 2;
    var blueNavigationLeftOffset = 175 + (windowWidth * 0.0161);

    $(".navigation-blue").css({
      "left": blueNavigationLeft - blueNavigationLeftOffset + "px"
    });

    /***
    * the grayNavigationLeft = the blue offset + width plus its own offset
    * as we want space between the div and the blue div
    ***/

    var grayNavigationLeft = blueNavigationLeft - blueNavigationLeftOffset + $(".navigation-blue").width();
    var grayNavigationLeftOffset = windowWidth * 0.005;

    $(".navigation-gray").css({
      "left": grayNavigationLeft + grayNavigationLeftOffset
    });

    /***
    * Brand navigation
    ***/

    var brandNavigationLeft = (0.1696*windowWidth - 65.01);

    $(".navigation-brand").css({
      "left": brandNavigationLeft - 100
    });

    /***
    * Site Title
    ***/

    var siteTitleTop = (windowWidth * -.01608) + 19.68;
    $(".header-site-title").css({
      "top": siteTitleTop
    });

  };

  /***
  * Footer
  ***/

  var content = $(".site-content");
  var contentMargin = parseInt( content.css("marginTop"), 10);
  var contentPaddingT = parseInt( content.css("paddingTop"), 10);
  var contentPaddingB = parseInt( content.css("paddingBottom"), 10);
  var distanceToFooter = content.height() + contentMargin + contentPaddingT + contentPaddingB; 

  // dynamically set footer offset on viewport change
  $(".footer-blue").css({
    "top": distanceToFooter
  });

  // also update the footer's red triangle
  $(".footer-red-triangle").css({
    "top": distanceToFooter
  });

};

// resize items on document load, window load
// window resize, and change of device orientation
$(document).ready(moveShapes);
$(window).on("load resize", moveShapes);
window.addEventListener("orientationchange", moveShapes);
