<?php
    require_once("../model/database.php");

$connection = new myspli($host, $username, $password);

if($connection->connect_error) {
    die("Error: " . $connection->connect.error);
}
else{
    echo "Success";
}