// provide fallback styles for browsers that don't support css properties
var positionDivs = function() {

  // only adjust elements on mobile views
  var windowWidth = $(window).width();

  if (windowWidth < 1000) {

    /***
    * Treat rotated elements
    ***/

    if('transform' in document.body.style) {} else {

      // remove mobile site title background
      $(".mobile-site-title").css({
        background: 'none'
      });

      // remove event stripe
      $(".event-stripe").css({
        background: 'none'
      });

      // remove additional stripes
      $(".image-stripe").remove();
      $(".about-text-stripe").remove();
    }
  };
};

$(document).ready(positionDivs);
$(window).on("load resize", positionDivs);
window.addEventListener("orientationchange", positionDivs);
