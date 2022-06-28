$(document).ready(function () {
  $("#para1").css("color", "red");
  $(".para2").css("color", "blue");
  $("#show").click(function () {
    $("#para1").hide(100);
  });
  $("#show1").click(function () {
    $("#para1").show(100);
  });
  $("#show2").click(function () {
    $("#para1").toggle(100);
  });
});
