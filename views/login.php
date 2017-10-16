<?php include 'partials/header.php'; ?>

<body>
  <div class="title text-center">TODO<img id="titleLogo" src="../images/done.png" /></div>

  <form class="" action="../controllers/login_controller.php" method="POST">
    <!-- Email -->
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <input id="email" name="email" type="email" class="validate">
        <label for="email">Email</label>
      </div>
    </div>

    <!-- Password -->
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <input id="password" name="password" type="password" class="validate">
        <label for="email">Password</label>
      </div>
  </div>

  <div class="center">
    <button class="btn waves-effect waves-light submitButton" type="submit" name="action">Login</button>
  </div>
  </form>

  <hr>
  <form id="createAccountForm" action="" method="POST">


    <!-- First Name -->
    <div class="row">
      <div class="input-field col s3 offset-s3">
        <input id="email" name="firstName" type="text" class="validate">
        <label for="email">First Name</label>
      </div>

    <!-- Last Name -->
      <div class="input-field col s3 ">
        <input id="password" name="lastName" type="text" class="validate">
        <label for="email">Last Name</label>
      </div>
    </div>

    <!-- Email -->
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <input id="email" name="email" type="email" class="validate">
        <label for="email">Email</label>
      </div>
    </div>

    <!-- Password -->
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <input id="password" name="password" type="password" class="validate">
        <label for="email">Password</label>
      </div>
    </div>

    <!-- Password -->
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <input id="password" name="c_password" type="password" class="validate">
        <label for="email">Confirm Password</label>
      </div>
    </div>

  <div class="center">
    <button class="btn waves-effect waves-light submitButton" type="submit" name="submit">Create Account</button>
  </div>
  </form>
</body>

</html>
