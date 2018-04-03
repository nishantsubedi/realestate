<?php
$servername = "localhost";
$usernamedb = "root";
$passworddb = "";
$database="realstate";

// Create connection
$conn = mysqli_connect($servername, $usernamedb, $passworddb, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>