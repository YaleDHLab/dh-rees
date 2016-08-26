// vertically center the text within the baby blue parallelogram
var verticallyCenter = function() {

  // only adjust elements on desktop views
  var windowWidth = $(window).width();

  if (windowWidth > 1000) {

    // calculate the height of the container
    var containerHeight = $(".baby-blue-parallelogram").height();

    // calculate the height of the text to vertically center
    var text = $(".baby-blue-parallelogram-text");
    var textHeight = text.height();

    // calculate and apply the required margin for the join text
    var textOffset = (containerHeight - textHeight) / 2;
    text.css({"marginTop": textOffset});

    // calculate and apply the required margin for the sign up button
    var button = $(".sign-up-button");
    var buttonHeight = button.height();
    var buttonPaddingT = parseInt(button.css("paddingTop"), 10);
    var buttonPaddingB = parseInt(button.css("paddingBottom"), 10);
    var totalButtonHeight = buttonHeight + buttonPaddingT + buttonPaddingB;

    var buttonOffset = (containerHeight - totalButtonHeight) / 2;
    button.css({"marginTop": buttonOffset});

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
