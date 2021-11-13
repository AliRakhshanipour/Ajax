$(document).ready(function () {
  $("#live-search").keyup(function (e) {
      e.preventDefault();
    $.ajax({
      url: "conf.php",
      method: "POST",
      data: {
        data: $("input#live-search").val(),
      },
      success: function (response) {
        $("#result").html(response);
      },
    });
  });
});
