<?php
include('./connect_db.php');

$reg_no = $_POST['reg'];
$pass = $_POST['pass'];
$fullname = $_POST['fullname'];
$sql = "INSERT INTO admin VALUES ('$reg_no','$pass','$fullname')";

if ($conn->query($sql) === TRUE) {
    header('Location: admin.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
