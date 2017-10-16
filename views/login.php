<?php include 'partials/header.php'; ?>

<body>
  <div class="title text-center">TODO<img id="titleLogo" src="../images/done.png" /></div>

  <form class="" action="../controllers/login_controller.php" method="POST">

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
