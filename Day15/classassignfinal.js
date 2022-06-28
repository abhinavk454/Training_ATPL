$(document).ready(function () {
  $("#cb").change(function () {
    if (this.checked) {
      $("#addr3").val($("#addr1").val());
      $("#addr4").val($("#addr2").val());
      $("#city1").val($("#city").val());
      $("#state1").val($("#state").val());
      $("#zip1").val($("#zip").val());
      $("#country1").val($("#country").val());
    } else {
      $("#addr3").val("");
      $("#addr4").val("");
      $("#city1").val("");
      $("#state1").val("");
      $("#zip1").val("");
      $("#country1").val("");
    }
  });
});
