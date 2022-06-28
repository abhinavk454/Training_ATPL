$(document).ready(function () {
  $("form:text").css("background-color", "yellow");
  $("#text").css("color", "red");
  $("#text").css("font-size", "14px");
  $("#sub").click(function () {
    var x = $("#text").val();
    alert(x);
  });
  $("#copy").change(function () {
    if (this.checked) {
      $("#out").val($("#text").val());
    } else {
      $("#out").val("");
    }
  });
});
