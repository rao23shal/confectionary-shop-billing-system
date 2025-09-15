<?php
// db_connect.php
// Tries env vars first (Render/prod). Falls back to localhost for local dev.

$host = getenv('MYSQL_HOST') ?: 'localhost';
$user = getenv('MYSQL_USER') ?: 'root';
$pass = getenv('MYSQL_PASSWORD') ?: '';
$db   = getenv('MYSQL_DATABASE') ?: 'user_data_d3ik';
$port = getenv('MYSQL_PORT') ?: 5432;

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>


<!-- postgresql://root:cRkUvjM59t99sAB0iEkUQNp347DlohR6@dpg-d343daa4d50c73enf9ig-a/user_data_d3ik -->