$(document).ready(function () {
  function blinkButton() {
    $("#bb").fadeOut(500);
    $("#bb").fadeIn(500);
  }
  setInterval(blinkButton, 2000);
});
