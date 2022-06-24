$(document).ready(function () {
  $("#hid").click(function () {
    $("p").slideUp(1000);
    $(".head").hide(5000);
  });
  $("#sho").click(function () {
    $(".head").show(1000);
    $("p").slideDown(5000);
  });
});
