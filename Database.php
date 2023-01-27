<?php
$host = "localhost";
$port = "3306";
$user = "root";
$password = "";
$database = "myproducts";

// Create a connection
$conn = mysqli_connect($host, $user, $password, $database, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>