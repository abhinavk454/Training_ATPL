<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';
//database user password
$pass = 'MYSQL_PASSWORD';
// database name
$mydatabase = 'MYSQL_DATABASE';
// connection name
$conn = new mysqli($host, $user, $pass, $mydatabase);


$a = $_POST["sroll"];
$b = $_POST["sname"];
$c = $_POST["scourse"];

echo $a;
echo $b;

$sql = "insert into users values($a,'$b','$c')";

//this will return a bool value
$res = $conn->query($sql);

if ($res)
    echo "Data Inserted";

else
    echo "Data not Inserted";
