function toggleItem(id, status) {
  event.preventDefault(); //stops errors, and posting form

  var content = event.target.innerText;
  var icon = event.target;

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
    if (content == "check_box_outline_blank") {
      $(icon).html("check_box");
    } else {
      $(icon).html("check_box_outline_blank");
    }
  });
}
