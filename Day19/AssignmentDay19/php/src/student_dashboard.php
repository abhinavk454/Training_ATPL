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
    </style>
</head>

<body>
    <div class="header">
        <h2>Welcome <?php echo $name ?>
        </h2>
        <a href="./s_logout.php">Log Out</a>
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