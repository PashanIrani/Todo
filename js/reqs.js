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

    //TODO: validate info

    // Fire off the request to /form.php
    request = $.ajax({
        url: formatUrl("/controllers/signup_controller.php"),
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        inputs.prop("disabled", false);
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        $('#createAccountFormError').html(errorThrown);
        inputs.prop("disabled", false);
    });

});
