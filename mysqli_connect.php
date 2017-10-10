<?php
DEFINE ('DB_USER', 'main_user');
define('DB_PASS', '8NLc8QLYijAzhOFl');
define('DB_HOST', 'localhost');
define('DB_NAME', 'Todo');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
OR die('Could not connect to db' . mysqli_connect_error());
 ?>
