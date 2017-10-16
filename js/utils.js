function formatUrl(url) {
  if (url.charAt(0) == '/') {
    return '..' + url;
  }
  return '../' + url;
}
