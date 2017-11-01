<?php
session_start();
include_once 'mysqli_connect.php';
include 'utils.php';

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

if (emptyString(array($email, $password))) {
        header("HTTP/1.0 400 Invalid Credentials");
        exit;
}

$sql = "SELECT * FROM user WHERE email";

$result = mysqli_query($dbc, $sql);

$sql = $dbc->prepare("SELECT password FROM user WHERE email=?");
$sql->bind_param("s", $email);
$sql->execute();

$sql->store_result();
$sql->bind_result($hashed_password);
$sql->fetch();

if (password_verify($password, $hashed_password)) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("HTTP/1.0 200 Login Successful");
} else {
    header("HTTP/1.0 400 Invalid Credentials");
}

$sql->close();
$dbc->close();
