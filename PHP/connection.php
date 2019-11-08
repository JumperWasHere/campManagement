<?php

$servername = "localhost";
$username = "root";
$password = "ariffjumper";
$database = "camp";

// Create connection
$con = new mysqli($servername, $username, $password,$database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
 
