<?php
session_start();
include_once 'mysqli_connect.php';
include 'utils.php';

//do stuff...
$sql = $dbc->prepare("UPDATE `todo_list` SET status=? WHERE userId=? AND id=?");
$sql->bind_param("sss", $_POST['status'], $_SESSION['current_user_id'], $_POST['id']);

if ($sql->execute() === true) {
    header("HTTP/1.0 200 New record created successfully");
} else {
    header("HTTP/1.0 400 Error updating DB");
}

$dbc->close();
