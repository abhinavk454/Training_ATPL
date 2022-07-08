<?php
session_start();
include('./connect_db.php');

$username = $_SESSION['username'];
$name = $_SESSION['name'];

$q = $_GET["q"];

$sql = "SELECT * FROM student WHERE name LIKE '%$q%'";
if ($q != "") {
    if ($result = $conn->query($sql)) {
        if ($result->num_rows > 0) {
            echo "<div class='container'>";
            echo "<table><tr><th>Reg. No.</th><th>Name</th><th>Marks</th><th>Action</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['reg_no'] . "</td><td>" . $row['NAME'] . "</td><td>" . $row['marks'] . "</td><td><a href='student_modify.php?reg_no=" . $row['reg_no'] . "'>Modify</a></td></tr>";
            }
            echo "</table>";
            echo "</div>";
        } else {
            echo "<div class='container'>";
            echo "<p>No results found</p>";
            echo "</div>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "<div class='container'>";
    echo "<p>No results found</p>";
    echo "</div>";
}
