<?php
session_start();
include('./connect_db.php');
$reg_no = $_POST['reg'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM student WHERE reg_no='$reg_no' AND password='$pass'";


$result = $conn->query($sql);
if ($result) {

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // output data of each row
        $_SESSION['reg_no'] = $row['reg_no'];
        $_SESSION['name'] = $row['NAME'];
        $_SESSION['marks'] = $row['marks'];
        // echo $_SESSION['reg_no'];
        // echo $_SESSION['name'];
        // echo $_SESSION['marks'];
        header('Location: student_dashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
