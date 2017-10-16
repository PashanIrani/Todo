<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Todo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/done.png">
</head>

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
    </div>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/randomColor.js"></script>
</body>

</html>
