<?php
session_start();
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Successful login
    $_SESSION['email'] = $email;
    header("Location: mainpage.html");
} else {
    echo "Invalid email or password.";
}

$conn->close();
?>
