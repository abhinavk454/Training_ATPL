<?php
include('./connect_db.php');
session_start();
$reg_no = $_SESSION['reg_no'];
$name = $_SESSION['name'];
$marks = $_SESSION['marks'];

?>

<html>

<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <div class="header">
        <div class="left">
            <h2>Welcome <?php echo $name ?>
            </h2>
        </div>
        <div class="rig">
            <a href="./student_dashboard.php">Back to Dashboard</a>
            <div></div>
            <div></div>
            <a href="./s_logout.php">Log Out</a>
        </div>
    </div>
    <div class="container">
        <form action="./feedback.php" method="POST">
            <input type="text" name="name" id="" placeholder="Name" required>
            <input type="email" name="email" id="" placeholder="Email" required>
            <input type="tel" name="phone" id="" placeholder="Phone" required>
            <input type="date" name="date" id="" placeholder="Date" required>
            <textarea name="remarks" id="" cols="30" rows="10" placeholder="Enter your comments in less than 200 words."></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>