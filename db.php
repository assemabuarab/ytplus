<?php
$host = "localhost";
$db = "GoldFire";
$user = "your_db_user";
$password = "your_db_password";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
