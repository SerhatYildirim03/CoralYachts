<?php
//database
$servername = "localhost";
$database = "coral_jachten";
$username = "coral_jachten";
$password = "coral_jachten";

//connection sting en PDO settings
try {
    global $connection;
    $connection = mysqli_connect($servername, $username, $password, $database);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}