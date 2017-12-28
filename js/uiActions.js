function addItemToView(text, status, id, view) {
  // Rest of the code is VERY messy, woops :P
  var html = "<div class='item'><a class='deleteItem' onclick='deleteItem(" + id + ")'><i class='material-icons'>delete_forever</i></a>"
  var icon = "check_box_outline_blank";
  if (status) {
    icon = "check_box";
  }

  html += text + "<a class='checkBox' onclick='toggleItem(" + id + "," + status + ")'><i class='material-icons'>" + icon + "</i></a></div><br />";

  view.append(html);
}
