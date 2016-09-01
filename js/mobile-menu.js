$(document).ready(function() {
  $(".navigation-dropdown-container").click(function() {
    if ($(".mobile-navigation-menu").hasClass("hidden")) {
      $(".mobile-navigation-menu").removeClass("hidden");
      $(".mobile-navigation-menu").toggleClass("slideOutRight slideInRight"); 
    } else {
      setTimeout(function() {
        $(".mobile-navigation-menu").addClass("hidden");
      }, 0);
      $(".mobile-navigation-menu").toggleClass("slideInRight slideOutRight");
    }
  });
});
