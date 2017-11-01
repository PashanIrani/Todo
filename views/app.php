<?php include 'partials/header.php'; ?>
<?php session_start(); ?>
<body>
    <!-- INPUT PAGE -->
    <div class="highlight inputMenu" id="inputPage">
        <i class="inputMenu">Enter A Task:</i><br />
        <input class="inputMenu" id="taskName" /><br />
        <span class="submit inputMenu"><i>Submit</i></span>
    </div>

    <!-- TOP BANNER -->
    <div class="highlight text-center top-banner">
        <span id="logout">Logout</span>
        <span id="appTitle">Todo<img width="16px" src="images/done.png" /></span>
        <div class="addButton invert">
            <img id="addButtonImage" src="images/plus.png" />
        </div>
    </div>


    <!-- Todo PAGE -->
    <div id="page">
        <!-- DO NOT REMOVE THIS DIV, It is need to keep the list in order -->
        <div></div>
        <p id="info">Press the '+' to add a task!</p>
        <?php echo $_SESSION['email']  . ' | ' . $_SESSION['password']?>
    </div>
</body>

</html>
