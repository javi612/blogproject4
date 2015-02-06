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
    $query = $connection->query("CREATE DATABASE $database");
    
    if($query){
        echo "successfully created database: " . $database;
    }
}

else {
    echo "Database already exists.";
}

$query = $connection->query("CREATE TABLE posts ("
        . "id int(11) NOT NULL AUTO_INCREMENT"
        . "title varchar (255) NOT NULL"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id)");

$connection->close();