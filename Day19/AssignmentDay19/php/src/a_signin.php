<?php
session_start();
include('./connect_db.php');
$reg_no = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username='$reg_no' AND password='$pass'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // output data of each row
    $_SESSION['username'] = $row['username'];
    $_SESSION['name'] = $row['name'];
    header('Location: admin_dashboard.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
