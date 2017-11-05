$(function() {

  // Abort any pending request
  if (request) {
    request.abort();
  }

  request = $.ajax({
    url: formatUrl("/controllers/fetch_todo_list.php"),
    type: "post",
    dataType: 'json'
  });

  // Callback handler that will be called on success
  request.done(function(response, textStatus, jqXHR) {
    var view = $("#itemsView");
    for (var i = 0; i < response.data.length; i++) {
      var html = "<div class='item'>"
      var text = response.data[i].text;
      var status = response.data[i].status;
      html += text + "</div><br />";
      view.append(html);
    }
  });

  request.fail(function(jqXHR, textStatus, errorThrown) {});


});
