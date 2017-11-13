function logout() {
  request = $.ajax({
    url: formatUrl("/controllers/logout_user.php"),
    type: "post"
  });


  // Callback handler that will be called on success
  request.done(function(response, textStatus, jqXHR) {
    window.location.replace('../views/login.php');
  });
}
