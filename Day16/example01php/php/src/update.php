<?php
// as in compose
$host = 'db';
// Database use name
$user = 'MYSQL_USER';
//database user password
$pass = 'MYSQL_PASSWORD';
// database name
$mydatabase = 'MYSQL_DATABASE';
// connection name
$conn = new mysqli($host, $user, $pass, $mydatabase);

$ro = $_POST["sroll"];
$mn = $_POST["name"];

$sql = "UPDATE users SET username='$mn' WHERE id=$ro";

$res = $conn->query($sql);

if ($res) {
    echo "Data Updated";
} else {
    echo $conn->error;
}
