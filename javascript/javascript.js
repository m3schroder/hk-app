$(document).ready(function () {
  $("#form2").submit(function (e) {
    e.preventDefault();
    let datastring = $(this).serialize();
    $.ajax({
      //create an ajax request to display.php
      type: "POST",
      url: "./php/targetEntry.php",
      data: datastring,
      dataType: "html", //expect html to be returned
      success: function (response) {
        $("#targetResponse").html(response);
      },
      error: function () {
        alert("Error with handling");
      },
    });
  });
});

$(document).ready(function () {
  $("#form1").submit(function (e) {
    let datastring = $(this).serialize();
    $.ajax({
      //create an ajax request to display.php
      type: "POST",
      url: "./php/objCreation.php",
      data: datastring,
      success: function (response) {
        alert("Your entry has been submitted");
      },
      error: function () {
        alert("Error with handling");
      },
    });
  });
});
