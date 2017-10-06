<?php include 'validate.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Todo - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/done.png">
</head>

<body>
  *note: the test login is: a@a.a | aaa
    <div class="title text-center">TODO<img id="titleLogo" src="images/done.png" /></div>

    <div id="loginCard" class="text-center">
        <span style="color:red;"><? echo $err ?></span>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
            <table>
                <!--EMAIL -->
                <tr>
                    <td>
                        <span>Email:</span>
                    </td>
                    <td>
                        <input type="text" name="email" />
                    </td>
                </tr>
                <!--PASSWORD-->
                <tr>
                    <td>
                        <span>Password:</span>
                    </td>
                    <td>
                        <input type="password" name="password" />
                    </td>
                </tr>
            </table>

            <br />
            <div id="loginSubmit">

                <input class="highlight" type="submit" />
                <br />
                <span>or</span>
                <br />
                <a id="createAccountLink">Create an account?</a>

            </div>
        </form>


    </div>

    <!-- Create account form -->
    <div id="accountCard" class="text-center">
        <form>
            <div class="createAccountPage bottomShawdow">
                <div class="bottomShawdow">
                    <span style="font-size: 200%;">Create an account</span>
                </div>
                <br />
                <!--Name -->

                <br />
                <input type="text" name="name" />
                <br />
                <span>Name</span>
                <!--EMAIL -->

                <br />
                <input type="text" name="email" />
                <br />
                <span>Email</span>
                <!--PASSWORD-->

                <br />
                <input type="password" name="password" />
                <br />
                <span>Password</span>
                <!--CONFIRM PASSWORD-->

                <br />
                <input type="password" name="comPassword" />
                <br />
                <span>Confirm Password</span>
                <br />
                <input class="highlight invert" type="submit" />
                <span>&nbsp;&nbsp;or&nbsp;&nbsp;</span><span id="cancel">Cancel</span>
            </div>


        </form>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/createAccountMenu.js"></script>
    <script type="text/javascript" src="js/randomColor.js"></script>
</body>

</html>
