<?php
$servername = "localhost";  // Change if your database is hosted elsewhere
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$database = "photo_gallery"; // Replace with your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
