// vertically center the text within the baby blue parallelogram
var verticallyCenter = function() {

  // only adjust elements on desktop views
  var windowWidth = $(window).width();

  if (windowWidth >= 1000) {

    // also vertically center the nav links
    var containerHeight = $(".navigation-blue").height();
    var link = $(".menu-item a");
    var linkHeight = link.height();
    var requiredTop = (containerHeight-linkHeight)/2;

    link.css({
      "marginTop": requiredTop
    });
  }

};

$(document).ready(verticallyCenter);
$(window).on("load resize", verticallyCenter);
window.addEventListener("orientationchange", verticallyCenter);
