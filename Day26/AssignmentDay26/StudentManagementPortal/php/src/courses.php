<?php
session_start();
include('./connect_db.php');

$username = $_SESSION['username'];
$name = $_SESSION['name'];

$sql = "SELECT * FROM courses";

if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {
        echo "<div class='container'>";
        echo "<table><tr><th>Course Name</th><th>Fees</th><th>Duration (Months)</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['c_name'] . "</td><td>" . $row['fee'] . "</td><td>" . $row['duration'] . "</td></tr>";
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
            <a href="./admin_dashboard.php">Dashboard</a>
            <a href="./a_logout.php">Log Out</a>
        </div>
    </div>
</body>

</html>