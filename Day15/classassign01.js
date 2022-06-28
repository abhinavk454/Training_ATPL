$(document).ready(function () {
  $("#image1").click(function () {
    // $("#image1").fadeOut(1000);
    $("#texta").css("visibility", "visible");
  });
  $("#image2").click(function () {
    // $("#image1").fadeOut(1000);s
    $("#textb").css("visibility", "visible");
    $("#textb").show(1000);
  });
});
