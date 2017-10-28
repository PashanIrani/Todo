function formatUrl(url) {
  if (url.charAt(0) == '/') {
    return '..' + url;
  }
  return '../' + url;
}

function urltoJSON(url) {
  var props = url.split('?');
  props = props.length == 2 ? props[1] : props[0];
  props = props.split('&');

  var result = {};

  for (var prop in props){
    var attribute = props[prop]
    result[attribute.split('=')[0]] = attribute.split('=')[1];
  }

  return result;
}

function showError(str, id) {
    var idIsNotGiven = id == '' || id == null;
    id = !idIsNotGiven ? id : '#mainError';
    $(id).html(str);
}
