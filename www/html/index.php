<?php

$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$database = getenv('MYSQL_DATABASE');


try {
    $db = new mysqli('db', $user, $password, $database);
    if ($db->connect_errno || $db->connect_error) {
        echo $db->connect_error . PHP_EOL . $db->connect_errno;
        die();
    }
    echo "Host: " . $db->host_info . PHP_EOL;

    $db->close();

} catch (Exception | Error $e) {
    echo $e->getMessage();
    die();
}
