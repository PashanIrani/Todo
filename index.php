<?php include 'mysqli_connect.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Todo - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
  <link href="styles/style.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="images/done.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>

<body>
  <div class="title text-center">TODO<img id="titleLogo" src="images/done.png" /></div>

  <form class="" action="login.php" method="POST">

  <div class="container">
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <input id="email" name="email" type="email" class="validate">
        <label for="email">Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <input id="password" name="password" type="password" class="validate">
        <label for="email">Password</label>
      </div>
    </div>
  </div>

  <div class="center">
    <button class="btn waves-effect waves-light submitButton" type="submit" name="action">Login</button>
  </div>
  </form>


  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/createAccountMenu.js"></script>
  <script type="text/javascript" src="js/randomColor.js"></script>
</body>

</html>
