<?php

include_once 'mysqli_connect.php';

$email = $pass = $err = '';

$sql = "SELECT email FROM user";
$result = $dbc->query($sql);
echo $result;

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
