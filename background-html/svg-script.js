var moveShapes = function() {
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();
  var rootTwo = Math.pow(2, 0.5);
  console.log(windowWidth, windowHeight);  
  
  /***
  * Header
  ***/

  /***
  * The decimal values here indicate the percent of the viewport
  * (a.k.a document) occupied by the topmost region of the shape
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
  * the offset should be = 75px + (1.61% viewport width)
  * 75 because we want an overlap between blue navigation and the red image div
  * and because of the translation applied to the blue div
  ***/

  var blueNavigationLeft = (rootTwo * $(".header-salmon").width()) / 2;
  var blueNavigationLeftOffset = 75 + (windowWidth * 0.0161);

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
  * Blue triangle
  ***/

  /***
  * The left-most point in the triangle should reach exactly
  * halfway across the page. If we imagine the blue triangle as
  * a square where we see the bottom left hand half, then we can model
  * the triangle as pageWidth**2 = width**2 + height**2, where
  * width and height are the same value (it's a square).
  *
  * There's one wrinkle here; we use a css clip that clips the described square
  * at the midpoint of the x axis as it moves leftward onto the page.
  * By multiplying the derived value by 2**(1/2) [aka the square root of 2]
  * we can adjust for this clip effect.
  *
  * Additionally, it's necessary to prevent the blue triangle from being
  * taller than the desired document height. The desired document height =
  * $(".page-content").height() + top + marginBottom. Determine what
  * percent of this desired document height would be filled by the current
  * blue triangle, and clip the bottom if necessar to avoid making the page
  * longer
  *
  ***/

  // calculate the required triangle width and height
  var blueTriangleWidth = Math.pow( (Math.pow(windowWidth, 2)/2), 0.5) * Math.pow(2, 0.5);
  var blueTriangleTop =  (-0.02732*windowWidth) - 3.815;

  /***
  * Determine the required triangle path and draw it.
  *
  * The svg points can be understood as the following array:
  * full width, 0 height; .5 width, .5 width; * (see below); full width, document height
  *
  * the starred point can be calculated as follows:
  *   .5 width - (document height - .5 document width - triangle offset top)
  *
  ***/

  // determine whether the desired triangle height is > document height
  var pageContentHeight = $(".page-content").height();
  var pageContentTop = parseInt( $(".page-content").css("top"), 10);
  var pageContentBottom = parseInt( $(".page-content").css("marginBottom"), 10);
  var desiredPageHeight = pageContentHeight + pageContentTop + pageContentBottom;
  var blueTriangleHeight = blueTriangleTop + blueTriangleWidth;

  // if the desired triangle height is > document height, we need 4 svg points,
  // otherwise we need 3
  if (blueTriangleHeight > desiredPageHeight) {

    // calculate the distance between the midpoint of the triangle height
    // (in page pixels) and the document height
    var triangleDocumentDelta = desiredPageHeight - ( ($(document).width()/2) + blueTriangleTop);

    var triangleSvgPoints = [
      {
        "label": "top-right",
        "x": $(window).width(),
        "y": 0
      },
      {
        "label": "mid-point-left",
        "x": $(window).width()/2,
        "y": $(window).width()/2
      },
      {
        "label": "bottom-left",
        "x": $(window).width() - (($(document).width()/2) - triangleDocumentDelta),
        "y": desiredPageHeight - blueTriangleTop
      },
      {
        "label": "bottom-right",
        "x": $(window).width(),
        "y": desiredPageHeight - blueTriangleTop
      }
    ];
  } else {
    var triangleSvgPoints = [
      {
        "label": "top-right",
        "x": $(window).width(),
        "y": 0
      },
      {
        "label": "mid-point-left",
        "x": blueTriangleWidth/2,
        "y": blueTriangleWidth/2
      },
      {
        "label": "bottom-right",
        "x": $(window).width(),
        "y": blueTriangleWidth
      }
    ];
  }

  // given a triangleSvgPoints object, build the polygon string
  var createPointArray = function(triangleSvgPoints) {
    var pointArrayString = '';
    for (var i=0; i<triangleSvgPoints.length; i++) {
      var pointX = triangleSvgPoints[i].x;
      var pointY = triangleSvgPoints[i].y;

      // the last point doesn't need trailing whitespace
      if (i != triangleSvgPoints.length) {
        var pointArrayString = pointArrayString.concat(pointX + "," + pointY + " ");
      } else {
        var pointArrayString = pointArrayString.concat(pointX + "," + pointY);
      }
    };
    return pointArrayString;
  };

  var updateSvg = function(svgClassName){
    var svg = document.getElementsByClassName(svgClassName)[0];
    width = $(window).width();

    // to get the right height, one must subtract the (often negative) top offset
    height = desiredPageHeight - blueTriangleTop;
    svg.setAttribute('height', height);
    svg.setAttribute('width', width);
    return svg;
  }

  var createPolygon = function(points, fill, stroke) {
    var polygon = document.createElementNS("http://www.w3.org/2000/svg","polygon");
    polygon.setAttribute("points", points);
    polygon.setAttribute("stroke", stroke);
    polygon.setAttribute('fill', fill);
    return polygon;
  }

  var appendPolygon = function(polygonContainer, polygon) {
    // remove the container's extant children (if any);
    var childNodes = polygonContainer.childNodes;
    for (var i=0; i<childNodes.length; i++) {
      polygonContainer.removeChild(polygonContainer.childNodes[i]);
    }

    // then append the new polygon
    polygonContainer.appendChild(polygon);
  };

  // create the required triangle svg
  var pointArray = createPointArray(triangleSvgPoints);
  var triangleSvg = updateSvg("blue-triangle-svg");
  var polygonObject = createPolygon(pointArray, "#cc3333", "#cc3333");
  appendPolygon(triangleSvg, polygonObject);

  // to be removed
  $(".main-blue-triangle").css({
    "width": blueTriangleWidth,
    "height": blueTriangleWidth,
    "top": blueTriangleTop + "px"
  });

  $(".blue-triangle-svg-container").css({
    "top": blueTriangleTop + "px"
  });

  console.log(triangleSvgPoints, blueTriangleWidth, blueTriangleTop);




  /***
  * Stripe elements
  ***/

  /***
  * Baby blue stripe
  *
  * To get a div with 45 degree stripe that's full window height,
  * one can use css transform: skewX(45deg).
  *
  * To ensure the div is full page height, it's necessary to set
  * the height = the document height, not just the window height
  *
  * The left offset is calculated by observing the desired left
  * offset at various viewport widths, then fitting a linear
  * model to the observed values
  *
  ***/

  var babyBlueStripeLeft = (0.6561*windowWidth) - 107.7;

  $(".baby-blue-stripe").css({
    left: babyBlueStripeLeft,
    height: $(document).height()
  });

  /***
  * Cream stripe
  *
  * The left offset should be set using a linear model
  ***/

  $(".cream-stripe").css({
    height: $(document).height()
    //left: creamStripeLeft
  });


  /***
  * Footer
  ***/

  // this will actually be set by css only, and is only for demo
  $(".footer-blue").css({
    "top": $(".page-content").height() + 251
  })

};


$(document).ready(moveShapes);
$(window).on("load resize", moveShapes);