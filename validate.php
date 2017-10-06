<?php
/*
* Author: Pashan Irani
* Discription: Checks if login is valid.
*/

$email = $pass = $err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $err = check($email, $pass);
}

function check($e, $p)
{
    if (($e == 'a@a.a' && filter_var($e, FILTER_VALIDATE_EMAIL)) && $p == 'aaa') {
        header('Location: /app.php');
    } else {
        return 'Incorrect Login Info';
    }
}
