<?php
    require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);

if($connection->connect_error) {
    die("Error: " . $connection->connect.error);
}

else{
    echo "Success" . $connection->host_info; 
}

$exists = $connection->select_db($database);

if(!$exists) {
    echo "Database does not exists";
}

$connection->close();