<?php
session_start();
include('./connect_db.php');

$username = $_SESSION['username'];
$name = $_SESSION['name'];

$sql = "SELECT * FROM student";

if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {
        echo "<div class='container'>";
        echo "<table><tr><th>Reg. No.</th><th>Name</th><th>Marks</th><th>Courses</th><th>Fees Pending</th><th>Action</th></tr>";
        while ($row = $result->fetch_assoc()) {
            $sql_no_course = "SELECT * FROM c_taken WHERE reg_no = '$row[reg_no]'";
            $sql_fees_paid = "SELECT sum(paid) FROM c_taken WHERE reg_no = '$row[reg_no]'";
            $sql_fees_total = "SELECT sum(fee) FROM courses WHERE c_name IN (SELECT c_name FROM c_taken WHERE reg_no = '$row[reg_no]')";
            $no_course = 0;
            $fee_paid = 0;
            $fee_total = 0;
            if ($result_no_course = $conn->query($sql_no_course)) {
                if ($result_no_course->num_rows > 0) {
                    $no_course = $result_no_course->num_rows;
                }
            }
            if ($result_fees_paid = $conn->query($sql_fees_paid)) {
                if ($result_fees_paid->num_rows > 0) {
                    $fee_paid = $result_fees_paid->fetch_assoc()['sum(paid)'];
                }
            }
            if ($result_fees_total = $conn->query($sql_fees_total)) {
                if ($result_fees_total->num_rows > 0) {
                    $fee_total = $result_fees_total->fetch_assoc()['sum(fee)'];
                }
            }
            echo "<tr><td>" . $row['reg_no'] . "</td><td>" . $row['NAME'] . "</td><td>" . $row['marks'] . "</td><td>" . $no_course . "</td><td>" . $fee_total - $fee_paid . "</td><td><a href='student_modify.php?reg_no=" . $row['reg_no'] . "'>Modify</a></td></tr>";
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
            <a href="./courses.php">All Courses</a>
            <a href="./a_courses.php">Assign Courses</a>
            <a href="./assigned_courses.php">All Enrollments</a>
            <a href="./view_feedbacks.php">View feedbacks</a>
            <a href="./a_logout.php">Log Out</a>
        </div>
    </div>
</body>

</html>