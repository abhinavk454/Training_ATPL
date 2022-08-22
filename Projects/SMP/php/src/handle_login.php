<?php
session_start();
include "./connect_db.php";

$username = $_GET['username'];
$password = $_GET['password'];
$role = $_GET['role'];

$sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password' AND role = '$role'";

$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = $role;
        if ($role == 'admin') {
            header("Location: ./admin-dashboard.php");
        } else if ($role == 'manager') {
            header("Location: ./management-dashboard.php");
        } else if ($role == 'faculty') {
            header("Location: ./faculty-dashboard.php");
        } else {
            header("Location: ./student-dashboard.php");
        }
        echo "success";
    } else {
        echo "fail";
    }
} else {
    echo "fail";
}
