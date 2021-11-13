$(document).ready(function () {
  $("#form-province").submit(function (e) {
    e.preventDefault();
    $("#ajax-result").html("Sending data...");
    $.ajax({
      url: "ajax-save-province.php",
      method: "POST",
      data: { data: $("input#new-province").val() },
      success: function (response) {
        $("#ajax-result").html(response);
      },
    });
  });
  //   console.log("ok");
});
