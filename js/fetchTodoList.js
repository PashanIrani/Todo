$(function() {

  // Abort any pending request
  if (request) {
    request.abort();
  }

  request = $.ajax({
    url: formatUrl("/controllers/fetch_todo_list.php"),
    type: "post",
    dataType:'json'
  });

  // Callback handler that will be called on success
  request.done(function(response, textStatus, jqXHR) {
    console.log(response);
  });

  request.fail(function(jqXHR, textStatus, errorThrown) {
  });


});
