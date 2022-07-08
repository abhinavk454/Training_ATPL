<?php
session_start();
include('./connect_db.php');

$username = $_SESSION['username'];
$name = $_SESSION['name'];

$sql = "SELECT * FROM student";

if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {
        echo "<div class='container'>";
        echo "<table><tr><th>Reg. No.</th><th>Name</th><th>Marks</th><th>Action</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['reg_no'] . "</td><td>" . $row['NAME'] . "</td><td>" . $row['marks'] . "</td><td><a href='student_modify.php?reg_no=" . $row['reg_no'] . "'>Modify</a></td></tr>";
        }
        echo "</table>";
        echo "</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <div class="header">
        <h2>Welcome <?php $name = $_SESSION['name'];
                    echo $name ?>
        </h2>
        <div class="right">
            <a href="./s_search.php">Search Student</a>
            <a href="./s_register.html">Add Students</a>
            <a href="./view_feedbacks.php">View feedbacks</a>
            <a href="./a_logout.php">Log Out</a>
        </div>
    </div>
</body>

</html>