$(document).ready(function() {
  $(".navigation-dropdown-container").click(function() {
    if ($(".mobile-navigation-menu").hasClass("hidden")) {
      $(".mobile-navigation-menu").toggleClass("hidden");
      $(".mobile-navigation-menu").toggleClass("slideOutRight slideInRight"); 
    } else {
      setTimeout(function() {
        $(".mobile-navigation-menu").toggleClass("hidden");
      }, 500);
      $(".mobile-navigation-menu").toggleClass("slideInRight slideOutRight");
    }
  });
});
