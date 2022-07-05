<?php
include('./connect_db.php');

$tno = $_POST['tno'];
$name = $_POST['fullname'];
$address = $_POST['address'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$deposit = $_POST['deposit'];

$check = "SELECT * FROM telephone WHERE tno='$tno'";

$res = $conn->query($check);
if ($conn->query($check)->num_rows > 0) {
    echo
    "Telephone number already exists";
} else {
    $sql = "INSERT INTO telephone VALUES
('$tno', '$name', '$address', '$state', '$pin', '$deposit')";
    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost:8000/view.php");
    } else {
        echo "Error: " . $sql . "<br />" . $conn->error;
    }
}
