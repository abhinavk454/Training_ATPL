<?php
session_start();
include('./configs/db.php');

$username = $_GET['username'];
$password = $_GET['password'];

$sql = "SELECT * FROM agents WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('Location: ./views/booking_dashboard.php');
    } else {
        header('Location: ./index.html');
    }
} else {
    // echo $conn->error;
    header('Location: ./index.html');
}
