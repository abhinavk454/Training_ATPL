<?php

// host
$host = 'db1';
// Database use name
$user = 'MYSQL_USER';
//database user password
$pass = 'MYSQL_PASSWORD';
// database name
$mydatabase = 'ATPL';
// connection name
$conn = new mysqli($host, $user, $pass, $mydatabase);

$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$pubdate = $_POST['year'];

$sql = "INSERT INTO books (ISBN, title, author,edition ,publication) VALUES ('$isbn', '$title', '$author','$pubdate' ,'$publisher')";

$res = $conn->query($sql);

if ($res) {
    echo "Successfully inserted";
} else {
    echo $conn->error;
}
?>
<br>
<a href="./index.html">HOME</a>