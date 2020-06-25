$(document).ready(function () {
  $("#form2").submit(function (e) {
    e.preventDefault();
    let data = $("#form2").serialize();
    $.ajax({
      //create an ajax request to display.php
      method: "POST",
      url: "./php/targetEntry.php",
      cache: false,
      data: data,
      dataType: "html", //expect html to be returned
      success: function (data, textStatus, jqXHR) {
        $("#targetResponse").html(jqXHR.responseText);
        $("#targetSubmit").hide();
        $("#targetOptions").show();
      },
    });
  });
});
