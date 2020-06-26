$("#targetSubmit").click(function (e) {
  e.preventDefault();
  alert("In jquery function");
  $.ajax("./php/targetEntry.php", {
    method: "POST",
    async: true,
    cache: false,
    data: $("#targetForm").serialize(),
    dataType: "html",
    success: function (response) {
      $("#targetResponse").html(response);
    },
    error: function (response) {
      alert(response);
      alert("Error");
    },
    complete: function () {
      alert("Complete");
    },
    beforeSend: function () {
      alert("This is the message before the ajax call");
    },
  });
});
