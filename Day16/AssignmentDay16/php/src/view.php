<?php
$host = 'db1';
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';
$mydatabase = 'ATPL';
$conn = new mysqli($host, $user, $pass, $mydatabase);

$sql = "SELECT * FROM books";

$req = $conn->query($sql);

if ($req) {
    echo "<table>";
    echo "<tr>";
    echo "<th>ISBN</th>";
    echo "<th>Title</th>";
    echo "<th>Author</th>";
    echo "<th>Publication</th>";
    echo "<th>Edition</th>";
    echo "</tr>";
    while ($row = $req->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['ISBN'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['author'] . "</td>";
        echo "<td>" . $row['publication'] . "</td>";
        echo "<td>" . $row['edition'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Error";
}

?>
<br>
<a href="./index.html">HOME</a>