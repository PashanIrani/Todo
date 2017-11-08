<?php
session_start();
include_once 'mysqli_connect.php';
include 'utils.php';

$id = $_SESSION['current_user_id'];

$sql = $dbc->prepare("SELECT `id`, `text`, `status` FROM `todo_list` WHERE userId=?");
$sql->bind_param("s", $id);
$sql->execute();

$sql->store_result();
$sql->bind_result($id, $text, $status);

$result = array();
while ($sql->fetch()) {
    array_push($result, array('text' => $text, 'status' => $status, 'id'=>$id));
}


header('Content-Type: application/json');
echo json_encode(array(
        'status' =>  200, // success or not?
        'data' => $result
        ));

$sql->close();
$dbc->close();
