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
        <form action="./as_course.php" method="POST">
            <label for="course">Course</label>
            <select name="course" id="">
                <option value="">Select Course</option>
                <?php
                $sql = "SELECT * FROM courses";
                if ($result = $conn->query($sql)) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['c_name'] . "'>" . $row['c_name'] . "</option>";
                        }
                    }
                }
                ?>
            </select>
            <br>
            <br>
            <label for="student">Student No</label>
            <select name="student" id="">
                <option value="">Select Student</option>
                <?php
                $sql = "SELECT * FROM student";
                if ($result = $conn->query($sql)) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['reg_no'] . "'>" . $row['reg_no'] . "</option>";
                        }
                    }
                }
                ?>
            </select>
            <br>
            <br>
            <input type="number" name="paid" placeholder="amount paid">
            <input type="submit" value="Enroll">
        </form>
    </div>
</body>

</html>