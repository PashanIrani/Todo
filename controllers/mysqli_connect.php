<?php
define('DB_USER', 'softccfpsvygki');
define('DB_PASS', '0c066f0ddb19e697a3dc555eb1a6f11fcce32e6df8e6ce6ea05e2379b849a57c');
define('DB_HOST', 'ec2-107-22-162-82.compute-1.amazonaws.com');
define('DB_NAME', 'debed0decaf41g');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$dbc) {
    error_log("Unable to connect to MySQL. " . mysqli_connect_errno() . " - " . mysqli_connect_error(), 0);
    exit;
}
