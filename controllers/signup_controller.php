<?php
include_once 'mysqli_connect.php';

$fname = $bar = isset($_POST['firstName']) ? $_POST['firstName'] : null;
$lname = $bar = isset($_POST['lastName']) ? $_POST['lastName'] : null;
$email = $bar = isset($_POST['email']) ? $_POST['email'] : null;
$password = $bar = isset($_POST['password']) ? $_POST['password'] : null;

$sql = $dbc->prepare("INSERT INTO `users` (`email`, `password`, `firstname`, `lastname`) VALUES (?, ?, ?, ?)");
$sql->bind_param("ssss", $email, $password, $fname, $lname);

if ($sql->execute() === true) {
    header("New record created successfully");
} else {
    header("Error: " . $sql . "<br>" . $dbc->error);
}

$dbc->close();
