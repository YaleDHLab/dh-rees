var moveShapes = function() {
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();
  console.log(windowWidth, windowHeight);  
  
  /***
  * Header
  ***/

  var blueHeaderWidth = windowWidth * .38

  $(".header-blue").css({
    "height": blueHeaderWidth + "px",
    "width": blueHeaderWidth + "px",
    "top": "-" + blueHeaderWidth/2 + "px",
    "left": "-" + blueHeaderWidth/2 + "px"
  });

  var salmonHeaderWidth = windowWidth * .54

  $(".header-salmon").css({
    "height": salmonHeaderWidth + "px",
    "width": salmonHeaderWidth + "px",
    "top": "-" + salmonHeaderWidth/2 + "px",
    "left": "-" + salmonHeaderWidth/2 + "px"
  });

  /***
  * Navigation
  ***/

  // blue nav bar
  var salmonCSquared = Math.pow($(".header-salmon").width(), 2) * 2;
  var salmonHeaderXOffset = Math.pow(salmonCSquared, 0.5)/2;
  var blueNavigationLeft =  salmonHeaderXOffset - 65;

  $(".navigation-blue").css({
    "left": blueNavigationLeft + "px"
  });

  // gray nav bar
  $(".navigation-gray").css({
    "left": blueNavigationLeft + $(".navigation-blue").width() + "px"
  });


  /***
  * Blue triangle
  ***/

  // The left-most point in the triangle should reach exactly 
  // halfway across the page. If we imagine the blue triangle as 
  // a square where we see the bottom left hand half, then we can model
  // the triangle as pageWidth**2 = width**2 + height**2, where 
  // width and height are the same value (it's a square).
  // There's only one wrinkle; we use a css clip that clips the described square
  // at the midpoint of the x axis as it moves leftward onto the page.
  // By multiplying the derived value by 2**(1/2) [aka the square root of 2]
  // we can adjust for this clip effect
  var blueTriangleWidth = Math.pow( (Math.pow(windowWidth, 2)/2), 0.5) * Math.pow(2, 0.5);
  var blueTriangleTop =  (windowWidth * 0.1536) + 20.54;

  $(".main-blue-triangle").css({
    "width": blueTriangleWidth,
    "height": blueTriangleWidth,
    "top": "-" + blueTriangleTop + "px"
  });


  /***
  * Cream stripe
  ***/

  var creamStripeTop = (0.3431*windowWidth) - 1059;

  $(".cream-stripe").css({
    top: creamStripeTop + "px"
  });

  /***
  * Baby blue stripe
  ***/

  var babyBlueStripeTop = (0.6296*windowWidth) - 1421;

  $(".baby-blue-stripe").css({
    top: babyBlueStripeTop + "px"
  });


};

$(document).ready(moveShapes);
$(window).on("resize", moveShapes);