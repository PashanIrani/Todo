<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

define('DB_USER', $url["user"]);
define('DB_PASS', $url["pass"]);
define('DB_HOST', $url["host"]);
define('DB_NAME', substr($url["path"], 1));

error_log(DB_HOST);
error_log(DB_USER);
error_log(DB_PASS);
error_log(DB_NAME);

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$dbc) {
    error_log("Unable to connect to MySQL. " . mysqli_connect_errno() . " - " . mysqli_connect_error(), 0);
    exit;
}
