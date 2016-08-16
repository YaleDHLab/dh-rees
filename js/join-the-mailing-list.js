$(document).ready(function() {

  // add onclick that displays mailing list modal when users click button
  $(".sign-up-button").click(function() {
    $(".mailing-list-modal-container").removeClass("hidden");
  });

  // hide the modal when users click the send button or the black background
  $(".mailing-list-modal-container").click(function() {
    $(".mailing-list-modal-container").addClass("hidden");
  });

  $(".wpcf7-submit").click(function() {
    $(".mailing-list-modal-container").addClass("hidden");
  });
});
