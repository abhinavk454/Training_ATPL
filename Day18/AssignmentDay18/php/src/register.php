<?php
include('./connect_db.php');

$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$sques = $_POST['sques'];
$answer = $_POST['answer'];

$sql = "INSERT INTO users VALUES ('$username', '$fullname','$password', '$sques', '$answer')";

$res = $conn->query($sql);

if ($res) {
    header('Location: login.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location: register.html');
}
