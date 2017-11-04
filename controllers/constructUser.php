<?php
include_once 'mysqli_connect.php';
include 'utils.php';

$email = "";

//user ain't logged in, smh...
if ($_SESSION['email'] == null || $_SESSION['email'] == "") {
    header('Location: login.php');
} else {
    $email = $_SESSION['email'];
}


$sql = $dbc->prepare("SELECT id, firstname, lastname FROM user WHERE email = ?");

$sql->bind_param("s", $email);
$sql->execute();

$sql->store_result();
$sql->bind_result($id, $firstname, $lastname);
$sql->fetch();

error_log($id, 0);
error_log($firstname, 0);
error_log($lastname, 0);

$_SESSION['current_user_id'] = $id;
$_SESSION['current_user_first_name'] = $firstname;
$_SESSION['current_user_last_name'] = $lastname;

$sql->close();
$dbc->close();
