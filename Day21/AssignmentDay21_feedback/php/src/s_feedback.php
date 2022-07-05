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
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
        }

        .container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            padding: 20px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
        }

        body {
            background: #32a852;
            font-family: "Roboto", sans-serif;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .header {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            align-items: center;
            text-align: center;
            background: #f1f1f1;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: left;
            padding: 20px;
        }

        form * {
            padding: 10px;
            margin: 5px;
        }

        a:hover {
            text-decoration: underline;
            background-color: #32a852;
        }
    </style>
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