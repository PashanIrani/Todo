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
      <span style="margin-left: 30px;">or</span>
      <a class="waves-effect waves-light btn-flat modal-trigger" href="#modal1">Create a Account</a>
    </div>
  </form>


  <div id="modal1" class="modal modal-fixed-footer">

    <form id="createAccountForm" action="" method="POST">
      <div class="modal-content">


        <div id="createAccountFormError" class="error"></div>

        <!-- First Name -->
        <div class="row">
          <div class="input-field col m6 s12">
            <input id="email" name="firstName" type="text" class="validate">
            <label for="email">First Name</label>
          </div>

          <!-- Last Name -->
          <div class="input-field col m6 s12">
            <input id="password" name="lastName" type="text" class="validate">
            <label for="email">Last Name</label>
          </div>
        </div>

        <!-- Email -->
        <div class="row">
          <div class="input-field col s12">
            <input id="email" name="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>

        <!-- Password -->
        <div class="row">
          <div class="input-field col s12 ">
            <input id="password" name="password" type="password" class="validate">
            <label for="email">Password</label>
          </div>
        </div>

        <!-- Confirm Password -->
        <div class="row">
          <div class="input-field col s12">
            <input id="password" name="c_password" type="password" class="validate">
            <label for="email">Confirm Password</label>
          </div>
        </div>



      </div>
      <div class="modal-footer">
        <div class="center">
          <button class="btn-flat waves-effect waves-light submitButton" type="submit" name="submit">Create Account</button>
        </div>
      </div>
    </form>
  </div>

  <?php include 'partials/scripts.php'; ?>
</body>

</html>
