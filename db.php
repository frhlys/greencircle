<?php
$host = 'localhost';
$username = 'root'; // default for XAMPP
$password = '';     // default is empty in XAMPP
$dbname = 'demo';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
