<?php
    require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);

/*
 * connection error is a type of code that if
 *  theres an error the whole page dies
 */

if($connection->connect_error) {
    die("Error: " . $connection->connect.error);
}

$exists = $connection->select_db($database);

if(!$exists) {
    echo "Database does not exists";
}

$connection->close();