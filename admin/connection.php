<?php
$host = "localhost";      // Database host (keep as localhost if using XAMPP)
$user = "root";           // Default XAMPP MySQL username
$pass = "";               // Default XAMPP MySQL password is empty
$db   = "user-data"; // Database name (create this in phpMyAdmin)

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
