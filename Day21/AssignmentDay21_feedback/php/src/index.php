<?php
include('./connect_db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
        }

        body {
            background: #32a852;
            font-family: "Roboto", sans-serif;
            text-align: center;
        }

        h1 {
            margin-top: 20px;
            color: white;
        }

        .container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 30%;
            height: 300px;
            padding: 20px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            justify-content: center;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <h1>Student Management Portal</h1>
    <div class="container">
        <h2><a href="./student.html">Student Login</a></h2>
        <h2><a href="./admin.html">Admin Login</a></h2>
    </div>
</body>

</html>