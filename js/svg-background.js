var moveShapes = function() {
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();
  var rootTwo = Math.pow(2, 0.5);

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
  * Brand navigation
  ***/

  var brandNavigationLeft = (0.1696*windowWidth - 65.01);

  $(".navigation-brand").css({
    "left": brandNavigationLeft
  });

  /***
  * Blue triangle
  ***/

  /***
  * To create a blue triangle that always intersects with the nav
  * and always reaches exactly halfway across the page, we can create
  * a simple SVG element and update its top margin as required.
  ***/

  // Determine how much margin to apply to the top of the triangle
  // such that the triangle will always intersect with the nav.
  // These coefficients were determined by fitting a linear model 
  // to the required left padding for various viewport widths
  var blueTriangleTop =  (-0.02732*windowWidth) - 3.815;

  // calculate how tall the entire document height should be
  var pageContentTop = parseInt( $(".page-content").css("paddingTop"), 10);
  var pageContentMarginTop = parseInt( $(".page-content").css("marginTop"), 10);
  var pageContentHeight = $(".page-content").height();
  var pageContentBottom = parseInt( $(".page-content").css("paddingBottom"), 10);
  var desiredPageHeight = pageContentTop + pageContentMarginTop + pageContentHeight + pageContentBottom;

  // if the calculated page height does not fill the viewport, set the
  // page height to the viewport height
  if (desiredPageHeight < $(window).height()) {
    var desiredPageHeight = $(window).height();
  };

  // calculate how tall stripes should be, and how much top to apply
  // to the footer. This distance = the full document height - footer height
  var distanceToFooter = $(document).height() - 100;

  // log values for analysis
  //console.log(windowWidth, windowHeight, desiredPageHeight, blueTriangleTop, $(document).height());

  // Define the triangle points
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
      "label": "bottom-right",
      "x": $(window).width(),
      "y": $(window).width()
    }
  ];

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
  var polygonObject = createPolygon(pointArray, "#213556", "#213556");
  appendPolygon(triangleSvg, polygonObject);

  $(".blue-triangle-svg-container").css({
    "top": blueTriangleTop + "px"
  });

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
  * The top offset is simply the desired page height minus the footer height
  *
  ***/

  var babyBlueStripeLeft = (0.6561*windowWidth) - 107.7;

  $(".baby-blue-stripe").css({
    left: babyBlueStripeLeft,
    height: distanceToFooter
  });

  /***
  * Cream stripe
  *
  * The left offset should be set using a linear model
  ***/

  $(".cream-stripe").css({
    //left: creamStripeLeft
    height: distanceToFooter
  });

  /***
  * Footer
  ***/

  // this will actually be set by css only, and is only for demo
  $(".footer-blue").css({
    "top": distanceToFooter
  });

};

// resize items on document load, window load
// window resize, and change of device orientation
$(document).ready(moveShapes);
$(window).on("load resize", moveShapes);
window.addEventListener("orientationchange", moveShapes);
