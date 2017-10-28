<?php

include_once 'mysqli_connect.php';
include 'utils.php';
$email = $pass = $err = '';

$sql = "SELECT * FROM user WHERE email";

$result = mysqli_query($dbc, $sql);

$sql = $dbc->prepare("SELECT password FROM user WHERE email=?");
$sql->bind_param("s", $email);
$sql->execute();

$sql->store_result();
$sql->bind_result($column1);
$stored_password = $column1;

while ($sql->fetch()) {
    $stored_password = $column1;
}

header("HTTP/1.0 422 " . $stored_password);


$sql->close();
$dbc->close();
