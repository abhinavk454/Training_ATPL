<?php
include('./connect_db.php');
session_start();
$reg_no = $_SESSION['reg_no'];
$name = $_SESSION['name'];
$marks = $_SESSION['marks'];

$name1 = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['phone'];
$date = $_POST['date'];
$remarks = $_POST['remarks'];

$sql = "INSERT INTO feedback(name,email,tel,date,remarks) VALUES('$name1','$email','$tel','$date','$remarks')";

$result = $conn->query($sql);

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
        <?php
        if ($result) {
            echo "<h2>Feedback submitted successfully</h2>";
        } else {
            echo "<h2>Error: " . $sql . "<br>" . $conn->error . "</h2>";
        }
        ?>
    </div>
</body>

</html>