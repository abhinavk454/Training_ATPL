$(document).ready(function () {
  $("#btn").click(function () {
    $("ol").append("<li>" + $("#text").val() + "</li>");
  });
});
