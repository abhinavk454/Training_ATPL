<?php
include('./connect_db.php');

$username = $_POST['username'];
$security_question = $_POST['security_question'];
$answer = $_POST['answer'];

$sql = "SELECT * FROM users WHERE username='$username' AND sques='$security_question' AND answer='$answer'";

$res = $conn->query($sql);

if ($res) {
    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        echo "<alert>Your password is: " . $row['password'] . "</alert>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
