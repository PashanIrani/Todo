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
    } else {
      showError('Passwords have to be same','#createAccountFormError');
    }

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
      console.log(response);
        inputs.prop("disabled", false);
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        console.log(errorThrown);
        inputs.prop("disabled", false);
    });

});
