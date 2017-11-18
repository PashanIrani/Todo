<?php

$is_Prod = 1;

if ($is_Prod) {
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    define('DB_USER', $url["user"]);
    define('DB_PASS', $url["pass"]);
    define('DB_HOST', $url["host"]);
    define('DB_NAME', substr($url["path"], 1));
} else {
    define('DB_USER', 'user');
    define('DB_PASS', 'password');
    define('DB_HOST', '127.0.0.1');
    define('DB_NAME', 'todo');
}

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$dbc) {
    error_log("Unable to connect to MySQL. " . mysqli_connect_errno() . " - " . mysqli_connect_error(), 0);
    exit;
}
