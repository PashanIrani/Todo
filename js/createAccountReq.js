var request;

$('#createAccountForm').submit(function(e) {
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

    if (validateSamePasswords(serializedData)) {
      request = $.ajax({
          url: formatUrl("/controllers/signup_controller.php"),
          type: "post",
          data: serializedData
      });
    } else {
      showError('Passwords have to be same','#createAccountFormError');
    }

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        inputs.prop("disabled", false);
        $('.modal').modal('close');
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        showError(errorThrown,'#createAccountFormError');
        inputs.prop("disabled", false);
    });

    inputs.prop("disabled", false);
});

function validateSamePasswords(get) {
  var form = urltoJSON(get);
  return form['password'] == form['c_password'];
}
