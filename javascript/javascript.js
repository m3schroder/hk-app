//Objective Submission
$("#objectiveSubmit").on("click", function (e) {
  e.preventDefault();
  $.ajax("./php/objectiveEntry.php", {
    method: "POST",
    async: true,
    data: $("#objectiveForm").serialize(),
    dataType: "html",
    success: function (response) {
      $("#objectiveForm").hide();
      $("#newSubmission").show();
    },
    error: function (errorThrown) {
      alert(errorThrown);
    },
  });
});

//Resubmit 'Yes'
$("#objectiveResubmitYes").on("click", function (e) {
  e.preventDefault();
  $("#objectiveForm").show();
  $("#newSubmission").hide();
});

//Resubmit 'No'
$("#objectiveResubmitNo").on("click", function (e) {
  $("#objectiveForm").submit();
});

// On objective modal close
$("#ObjectiveCreationModal").on("hide.bs.modal", function () {
  $("#objectiveForm")
    .submit()
    .$("#newSubmission")
    .hide()
    .$("#objectiveForm")
    .show();
});

//Submit target search
$("#targetSubmit").on("click", function (e) {
  e.preventDefault();
  $.ajax("./php/targetEntry.php", {
    method: "POST",
    async: true,
    data: $("#targetSearch").serialize(),
    dataType: "html",
    success: function (response) {
      $("#targetResponse").html(response);
      $("#targetSubmit").toggle();
      $("#targetOptions").toggle();
    },
    error: function (errorThrown) {
      alert(errorThrown);
    },
  });
});

//Refresh target search
$("#targetTableRefresh").on("click", function (e) {
  e.preventDefault();
  $.ajax("./php/targetEntry.php", {
    method: "POST",
    async: true,
    data: $("#targetSearch").serialize(),
    dataType: "html",
    success: function (response) {
      $("#targetResponse").html(response);
    },
    error: function (errorThrown) {
      alert(errorThrown);
    },
  });
});

// Reset target search form
$("#targetSearchReset").on("click", function (e) {
  e.preventDefault();
  $("#targetResponse").empty();
  $("#targetSubmit").show();
  $("#targetOptions").hide();
  $("#targetSearch").trigger("reset");
});
