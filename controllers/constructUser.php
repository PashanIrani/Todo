<?php
include_once 'mysqli_connect.php';
include 'utils.php';

$email = $_SESSION['email'];

$sql = $dbc->prepare("SELECT id, firstname, lastname FROM user WHERE email = ?");

$sql->bind_param("s", $email);
$sql->execute();

$sql->store_result();
$sql->bind_result($id, $firstname, $lastname);
$sql->fetch();
