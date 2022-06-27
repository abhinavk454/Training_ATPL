<?php
// host defined in compose file
$host = 'db';
// Database use name
$user = 'MYSQL_USER';
//database user password
$pass = 'MYSQL_PASSWORD';
// database name
$mydatabase = 'MYSQL_DATABASE';
// connection name
$conn = new mysqli($host, $user, $pass, $mydatabase);

$di = $_POST["sroll"];

// sql to delete from user table
$sql = "DELETE FROM users WHERE id=$di";

$res = $conn->query($sql);

if ($res) {
    echo "Data Deleted";
} else {
    echo "Data not Deleted";
}
