<?php

include_once 'mysqli_connect.php';
include 'utils.php';
$email = $pass = $err = '';

$sql = "SELECT * FROM user WHERE email";

$result = mysqli_query($dbc, $sql);

//TODO: implement login

$dbc->close();
