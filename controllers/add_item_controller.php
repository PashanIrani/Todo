<?php
session_start();
include_once 'mysqli_connect.php';
include 'utils.php';

//do stuff...
$sql = $dbc->prepare("INSERT INTO `todo_list` (`userId`, `text`) VALUES (?, ?)");
$sql->bind_param("ss", $_SESSION['current_user_id'], $_POST['item']);

if ($sql->execute() === true) {
    header("HTTP/1.0 200 New record created successfully");
} else {
    header("HTTP/1.0 400 Error adding to DB");
}

$dbc->close();
