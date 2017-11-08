function toggleItem(id, status) {
  event.preventDefault(); //stops errors, and posting form

  // Abort any pending request
  if (request) {
    request.abort();
  }

  if (status == 1) {
    status = 0;
  } else {
    status = 1;
  }

  var param = "id=" + id + "&status=" + status;

  request = $.ajax({
    url: formatUrl("/controllers/update_item_status.php"),
    type: "post",
    data: param
  });

  // Callback handler that will be called on success
  request.done(function(response, textStatus, jqXHR) {
    console.log(textStatus);
    fetchTodoList();
  });

  request.fail(function(jqXHR, textStatus, errorThrown) {
    console.log(textStatus);
  });

}
