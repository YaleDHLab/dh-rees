var moveShapes = function() {
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();
  var rootTwo = Math.pow(2, 0.5);
  console.log(windowWidth, windowHeight);  
  
  /***
  * Header
  ***/

  /***
  * The decimal values here indicate the percent of the viewport occupied
  * by the topmost region of the shape
  ***/

  var blueHeaderWidth =  rootTwo * windowWidth * .27;

  $(".header-blue").css({
    "height": blueHeaderWidth + "px",
    "width": blueHeaderWidth + "px",
    "top": "-" + blueHeaderWidth/2 + "px",
    "left": "-" + blueHeaderWidth/2 + "px"
  });

  var salmonHeaderWidth = rootTwo * windowWidth * (.27 + .155);

  $(".header-salmon").css({
    "height": salmonHeaderWidth + "px",
    "width": salmonHeaderWidth + "px",
    "top": "-" + salmonHeaderWidth/2 + "px",
    "left": "-" + salmonHeaderWidth/2 + "px"
  });

  /***
  * Navigation
  ***/

  /***
  * To calculate the blue nav bar's left offset, compute:
  * ((rootTwo * header-salmon's width) / 2 ) - offset
  * 
  * the offset should be = 75px + 1.61% viewport width
  ***/

  var blueNavigationLeft = (rootTwo * $(".header-salmon").width()) / 2;
  var blueNavigationLeftOffset = 75 + (windowWidth * 0.0161);

  $(".navigation-blue").css({
    "left": blueNavigationLeft - blueNavigationLeftOffset + "px"
  });

  var grayNavigationLeft = blueNavigationLeft - blueNavigationLeftOffset + $(".navigation-blue").width();

  $(".navigation-gray").css({
    "left": grayNavigationLeft
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
  var blueTriangleTop =  (-0.02732*windowWidth) - 3.815;

  $(".main-blue-triangle").css({
    "width": blueTriangleWidth,
    "height": blueTriangleWidth,
    "top": blueTriangleTop + "px"
  });

  /***
  * Stripe elements
  ***/

  /***
  * Stripe length may be calculated as follows:
  *
  * 2**(1/2) * windowHeight + (2*(windowWidth * stripeWidthInPercent))
  *
  * We take the square root of the view height because all bars are at
  * 45 deg angles. We add 2*(view width * stripe width in percent)
  * because at each of the 2 ends of the bar, we are missing
  * stripe width in percent * view width in pixels (due to the rotation)
  *
  * Finally, one must also adjust the left offset as the viewport height increases.
  * To calculate that offset, take the viewport height on which the babyBlueLeft
  * offset linear model was built, identify the number of vertical pixels the user
  * has departed from that value, and use half that value
  *
  ***/

  /***
  * Baby blue stripe
  ***/

  var babyBlueDiv = $(".baby-blue-stripe");

  // calculated a priori / analytically
  var babyBlueHeight = Math.pow(2, 0.5) * windowHeight + ( 2*(babyBlueDiv.width()) );
  var babyBlueTop = 0 - (0.5 * babyBlueHeight - (0.5 * windowHeight));
  
  // calculated empically using linear model
  var babyBlueLeft = (0.7160*windowWidth) - 367.9;

  // 743 is the window height used when the linear model was built
  var babyBlueOffset = (windowHeight - 743)/2;

  babyBlueDiv.css({
    height: babyBlueHeight,
    top: babyBlueTop,
    left: babyBlueLeft - babyBlueOffset
  });

  // if a stripe doesn't fill the vertical space
  // of the viewport, one can increment its pixels by n,
  // then increment the amount subtracted from the value below
  // by n/2
  var creamStripeTop = (0.5873*windowWidth) - 5030;

  $(".cream-stripe").css({
    //top: creamStripeTop + "px"
  });


};

$(document).ready(moveShapes);
$(window).on("resize", moveShapes);