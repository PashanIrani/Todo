<?php include 'partials/header.php'; ?>
<?php session_start(); ?>
<?php include '../controllers/constructUser.php'; ?>

<body>

  <ul id="slide-out" class="side-nav">
    <li>
      <div class="user-view">
        <div class="sideBarMsg">Welcome,<br>
          <?php echo $_SESSION['current_user_first_name'] . " " . $_SESSION['current_user_last_name']?></div>
      </div>
    </li>
    <li>
      <div class="divider"></div>
    </li>
    <li><a onclick="logout()">logout</a></li>
  </ul>


  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

  <form id="addItemForm" class="" action="" method="post">

    <!-- add item -->
    <div class="row">
      <div class="input-field col s8 offset-s2 m6 offset-m3 xl4 offset-xl4">
        <input placeholder="Add Item..." name="item" type="text">
      </div>

      <button id="addItemButton" type="submit" name="action" class="waves-effect">
        <i class="material-icons">add</i>
      </button>
    </div>
  </form>

  <div class="row">
    <div id="itemsView" class="col s8 offset-s2 m6 offset-m3 xl4 offset-xl4"></div>
  </div>
  <?php include 'partials/scripts.php'; ?>
  <script type="text/javascript" src="../../js/fetchTodoList.js"></script>
</body>

</html>
