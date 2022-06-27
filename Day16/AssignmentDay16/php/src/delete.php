<?php
$host = 'db1';
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';
$mydatabase = 'ATPL';
$conn = new mysqli($host, $user, $pass, $mydatabase);

$isbn = $_POST['isbn'];

$sql = "DELETE FROM books WHERE ISBN='$isbn'";

$req = $conn->query($sql);

if ($req) {
    echo "Successfully deleted";
} else {
    echo $conn->error;
}
?>
<br>
<a href="./index.html">HOME</a>