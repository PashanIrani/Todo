<?php include 'partials/header.php'; ?>
<?php session_start(); ?>
<body>
  <div class="title text-center">.todo.</div>

  <!--div id="loginBackgroundCard" class="z-depth-3"></div-->
  <div class="loginCard">
    <form id="loginForm" action="" method="POST">

            <div id="loginError" class="error"></div>
      <!-- Email -->
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>

      <!-- Password -->
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="email">Password</label>
        </div>
      </div>

      <div class="center">
        <button class="btn waves-effect waves-light submitButton" type="submit" name="action">Login</button>
        <div style="height: 25px"></div>
        <span>or</span>
        <div></div>
        <div style="height: 15px"></div>
        <a class="waves-effect waves-light btn-flat modal-trigger" href="#modal1">Create an Account</a>
      </div>

    </form>
  </div>

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
