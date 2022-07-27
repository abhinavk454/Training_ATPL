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
        $c_name = $_POST['course'];
        $reg_no = $_POST['student'];
        $paid = $_POST['paid'];

        $sql = "select * from c_taken where reg_no = '$reg_no' and c_name = '$c_name'";
        if ($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
                echo "<h2>Student already enrolled in this course</h2>";
            } else {
                $sql = "insert into c_taken (reg_no, c_name, paid) values ('$reg_no', '$c_name', '$paid')";
                if ($result = $conn->query($sql)) {
                    echo "<h2>Student enrolled in this course</h2>";
                } else {
                    echo "<h2>Error enrolling student</h2>";
                }
            }
        }
        ?>
    </div>
</body>

</html>