<?php
session_start();
include('./connect_db.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$res = $conn->query($sql);

if ($res) {
    if ($res->num_rows > 0) {
        $_SESSION['username'] = $username;
        header('Location: index.html');
    } else {
        header('Location: register.html');
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
