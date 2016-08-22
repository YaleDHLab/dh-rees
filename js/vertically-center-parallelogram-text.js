// vertically center the text within the baby blue parallelogram
var verticallyCenter = function() {
 
  // calculate the height of the container
  var containerHeight = $(".baby-blue-parallelogram").height();
 
  // calculate the height of the text to vertically center
  var text = $(".baby-blue-parallelogram-text");
  var textHeight = text.height();
  
  // calculate and apply the required margin
  var requiredMargin = (containerHeight - textHeight) / 2;
  text.css({"marginTop": requiredMargin});
}

$(document).ready(verticallyCenter);
$(window).on("load resize", verticallyCenter);
window.addEventListener("orientationchange", verticallyCenter);
