<?php
session_start();
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 'admin') {
        header("Location: ./index.php");
    }
}
if (!isset($_SESSION['username'])) {
    header("Location: ./index.php");
}

include './php/db_connect.php';
$sql = "SELECT * FROM student";

$result = $conn->query($sql);

if ($result) {
    $managers = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator Dashboard</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            /* flex-direction: column; */
            width: 100vw;
            height: 100vh;
            background-color: #e9e9e9;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .top {
            width: 22%;
            height: 100%;
            background-color: #202220;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            color: #E9E9E9;
            text-align: center;
        }

        .bottom {
            display: flex;
            flex-direction: column;
            width: 78%;
            height: 100%;
            align-items: center;
            justify-content: space-around;
            padding: 20px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #E9E9E9;
        }

        .top>a {
            width: 100px;
            height: 40px;
            background-color: #E9E9E9;
            color: #202220;
            text-align: center;
            font-weight: bolder;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
        }

        .top>h2 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        span {
            text-transform: uppercase;
            font-size: 40px;
        }

        form {
            width: 100%;
            height: 80%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: space-around;
            margin: auto;
        }

        input[type="text"],
        input[type="email"] {
            width: 50%;
            height: 50px;
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #000;
            padding: 0 10px;
            font-size: 16px;
            margin: 10px;
            outline: none;
            text-align: center;
        }

        input[type="date"] {
            width: 50%;
            height: 50px;
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #000;
            padding: 0 10px;
            font-size: 16px;
            margin: 10px;
            outline: none;
            text-align: center;
        }

        input[type="submit"] {
            width: 30%;
            height: 50px;
            background-color: #000;
            border: none;
            color: #fff;
            font-size: 16px;
            margin: 10px;
            outline: none;
            cursor: pointer;
            align-self: center;
        }

        input[type="submit"]:hover {
            background-color: #fff;
            color: #000;
            align-self: center;
        }
    </style>
</head>

<body>
    <div class="top">
        <h2> <a href="./admin-dashboard.php"> <span>Admin</span> Dashboard </a> </h2>
        <a href="logout.php">Logout</a>
    </div>
    <div class="bottom">
        <h1>All Managers</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Access Level</th>
                <th>Action</th>
            </tr>
            <?php
            foreach ($managers as $manager) {
                echo "<tr>";
                echo "<td>" . $manager['id'] . "</td>";
                echo "<td>" . $manager['name'] . "</td>";
                echo "<td>" . $manager['email'] . "</td>";
                echo "<td>" . $manager['phone'] . "</td>";
                echo "<td>" . $manager['access_r'] . "</td>";
                echo "<td><a href='./view_manager.php?id=" . $manager['id'] . "'>View</a> | <a href='edit_manager.php?id=" . $manager['id'] . "'>Edit</a> | <a href='delete_manager.php?id=" . $manager['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>