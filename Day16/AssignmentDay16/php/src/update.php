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

$sql = "UPDATE books SET title='$title', author='$author', publication='$publisher', edition='$pubdate' WHERE ISBN='$isbn'";

$req = $conn->query($sql);
if ($req) {
    echo "Successfully updated";
} else {
    echo "Error updating";
}
?>
</br>
<a href="./index.html">HOME</a>