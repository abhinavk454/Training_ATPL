<?php
include('./connect_db.php');

$sql = "SELECT * FROM students";

$req = $conn->query($sql);

if ($req->num_rows > 0) {
    while ($row = $req->fetch_assoc()) {
        echo $row['id'] . ' ' . $row['fullname'] . "\n";
    }
} else {
    echo "No students found.\n";
}
