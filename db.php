<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default is empty in XAMPP
$dbname = "user_db"; // Name of your database

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>