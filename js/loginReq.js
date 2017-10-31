$('#loginForm').submit(function(e) {
    event.preventDefault(); //stops errors, and posting form

    // Abort any pending request
    if (request) {
        request.abort();
    }

    var form = $(this);

    //grabs all types of elements
    var inputs = form.find("input, select, button, textarea");

    var serializedData = form.serialize();

    //disables all inputs
    inputs.prop("disabled", true);

    if (serializedData) {
      request = $.ajax({
          url: formatUrl("/controllers/login_controller.php"),
          type: "post",
          data: serializedData
      });
    }

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        inputs.prop("disabled", false);
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
      showError(errorThrown,'#loginError');
        inputs.prop("disabled", false);
    });

});
