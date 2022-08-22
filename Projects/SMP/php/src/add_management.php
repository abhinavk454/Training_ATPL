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
        input[type="email"],
        select {
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
        <h1>Add Management </h1>
        <form action="#" method="post">
            <label for="name">
                Name
                <input type="text" name="name" placeholder="Enter Manager Name" required />
            </label>
            <label for="email">
                Email
                <input type="email" name="email" placeholder="Enter Manager Email" required />
            </label>
            <label for="phone">
                Phone
                <input type="text" name="phone" placeholder="Contact Number" required />
            </label>
            <label for="access">
                Access
                <select name="access_r" id="">
                    <option value="">Select Access Label</option>
                    <option value="1">Level 1</option>
                    <option value="2">Level 2</option>
                    <option value="3">Level 3</option>
                    <option value="4">Level 4</option>
                </select>
            </label>
            <input type="submit" name="submit" value="Add" />
        </form>
    </div>
</body>

</html>