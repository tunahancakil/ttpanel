<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$database = "ttyazilim";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, "utf8mb4");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>