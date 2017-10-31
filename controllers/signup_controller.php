<?php
include_once 'mysqli_connect.php';
include 'utils.php';

$fname = isset($_POST['firstName']) ? $_POST['firstName'] : null;
$lname = isset($_POST['lastName']) ? $_POST['lastName'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$fields = array($fname, $lname, $email, $password);

if (emptyString($fields)) {
        header("HTTP/1.0 400 Empty Input");
} else {
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = $dbc->prepare("INSERT INTO `user` (`email`, `password`, `firstname`, `lastname`) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $email, $password_hash, $fname, $lname);

    if ($sql->execute() === true) {
        header("HTTP/1.0 200 New record created successfully");
    } else {
        header("HTTP/1.0 400 Error adding to DB");
    }

    $dbc->close();
}
