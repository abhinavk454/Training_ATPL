<?php
include('./connect_db.php');

$reg_no = $_POST['reg'];
$pass = $_POST['pass'];
$fullname = $_POST['fullname'];
$marks = $_POST['marks'];

$sql = "INSERT INTO student VALUES ('$reg_no','$fullname','$pass','$marks')";

if ($conn->query($sql) === TRUE) {
    header('Location: student.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
