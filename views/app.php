<?php include 'partials/header.php'; ?>
<?php session_start(); ?>
<?php include '../controllers/constructUser.php'; ?>

<body>
  <form id="addItemForm" class="" action="" method="post">

    <!-- add item -->
    <div class="row">
      <div class="input-field col s3 offset-s4">
        <input placeholder="Add Item..." name="item" type="text">
      </div>

      <button id="addItemButton" type="submit" name="action" class="waves-effect">
        <i class="material-icons">add</i>
      </button>
    </div>

    <div id="items"></div>

  </form>

    <?php include 'partials/scripts.php'; ?>
</body>

</html>
