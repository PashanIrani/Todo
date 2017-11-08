$('#addItemForm').submit(function(e) {
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
    if (serializedData && validate(serializedData)) {
      request = $.ajax({
        url: formatUrl("/controllers/add_item_controller.php"),
        type: "post",
        data: serializedData
      });
  } else {
    inputs.prop("disabled", false);
  }
  
  // Callback handler that will be called on success
  request.done(function(response, textStatus, jqXHR) {
    inputs.prop("disabled", false);
    inputs.prop("value", "");
  });

  request.fail(function(jqXHR, textStatus, errorThrown) {
    inputs.prop("disabled", true);
  });

});

function validate(get) {
  var form = urltoJSON(get);
  console.log(form);
  return form['item'] != "" && form['item'] != null && form['item'] != undefined;
}
