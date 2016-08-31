$(document).ready(function() {
  /* Mobile links to DHLab and site home */
  $(".mobile-navigation-brand-link").click(function() {
    window.location.replace("http://web.library.yale.edu/dhlab");
  });
  $(".mobile-site-title-link").click(function() {
    window.location.replace("http://dhrees.yale.edu");
  });
  /* Desktop links to DHLab and site home */


  $(".navigation-brand > svg").click(function() {
    window.location.replace("http://web.library.yale.edu/dhlab");
  });
  $(".header-site-title-link").click(function() {
    window.location.replace("http://dhrees.yale.edu");
  });
});
