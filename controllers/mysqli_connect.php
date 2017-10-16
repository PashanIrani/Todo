<?php
define('DB_USER', 'user');
define('DB_PASS', 'password');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'todo');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$dbc) {
    echo "Unable to connect to MySQL. " . mysqli_connect_errno() . " - " . mysqli_connect_error();
    exit;
}
