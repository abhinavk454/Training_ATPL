<?php
include('./connect_db.php');
session_start();
$username = $_SESSION['username'];
$name = $_SESSION['name'];
?>

<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <div class="header">
        <div class="left">
            <h2>Welcome <?php echo $name ?>
            </h2>
        </div>
        <div class="rig">
            <a href="./admin_dashboard.php">Dashboard</a>
            <a href="./a_logout.php">Log Out</a>
        </div>
    </div>
    <div class="container">
        <?php
        $sql = "select * from c_taken";
        if ($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Student No</th>";
                echo "<th>Course Name</th>";
                echo "<th>Amount Paid</th>";
                echo "<th>Amount Remaining</th>";
                echo "</tr>";
                while ($row = $result->fetch_assoc()) {
                    $fee_sql = "select fee from courses where c_name = '$row[c_name]'";
                    echo "<tr>";
                    echo "<td>" . $row['reg_no'] . "</td>";
                    echo "<td>" . $row['c_name'] . "</td>";
                    echo "<td>" . $row['paid'] . "</td>";
                    if ($fee_result = $conn->query($fee_sql)) {
                        if ($fee_result->num_rows > 0) {
                            $fee_row = $fee_result->fetch_assoc();
                            echo "<td>" . ($fee_row['fee'] - $row['paid']) . "</td>";
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<h2>No students enrolled in any course</h2>";
            }
        } else {
            echo "<h2>Error fetching students</h2>";
        }
        ?>
    </div>
</body>

</html>