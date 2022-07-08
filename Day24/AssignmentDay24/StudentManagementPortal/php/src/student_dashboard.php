<?php
// include('./connect_db.php');
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
        <h2>Welcome <?php echo $name ?>
        </h2>
        <div class="right">
            <a href="#">Profile</a>
            <a href="./s_feedback.php">Feedback </a>
            <a href="./s_logout.php">Log Out</a>
        </div>
    </div>
    <div class="container">
        <table>
            <tr>
                <th>Reg No</th>
                <th>Name</th>
                <th>Marks</th>
            </tr>
            <tr>
                <td><?php echo $reg_no; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $marks; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>