<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header("Location: ./login.php");
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

        .alo {
            display: flex;
            width: 100%;
            height: 50%;
            justify-content: space-around;
            align-items: center;
            text-align: center;
        }

        .dlo {
            display: flex;
            width: 100%;
            height: 50%;
            justify-content: space-around;
            align-items: center;
            text-align: center
        }

        .u1,
        .u2,
        .u3,
        .u4,
        .l1,
        .l2,
        .l3,
        .l4 {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 12em;
            height: 12em;
            margin: 2px;
            background-color: #93A32E8C;
            border-radius: 20%;
            color: #E9E9E9;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
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

        span {
            text-transform: uppercase;
            font-size: 40px;
        }

        .u1 {
            background-image: url("./view_S.png");
            background-position: top;
        }

        .u2 {
            background-image: url("./exam.svg");
            background-size: contain;
        }

        .u3 {
            background-image: url("./notes.svg");
            background-size: contain;
        }

        .u4 {}

        .l1 {
            background-image: url("./eval.svg");
            background-size: contain;
        }

        .l2 {
            background-image: url("./course.svg");
            background-size: contain;
        }

        .l3 {
            background-image: url("./certi.svg");
            background-size: contain;
        }

        .l4 {}
    </style>
</head>

<body>
    <div class="top">
        <h2> <span>Admin</span> Dashboard</h2>
        <a href="logout.php">Logout</a>
    </div>
    <div class="bottom">
        <h1>Your All Modules </h1>
        <div class="alo">
            <div class="u1">
                <a href="">
                    Add Student
                </a>
            </div>
            <div class="u2">
                <a href="">
                    Add Manager
                </a>
            </div>
            <div class="u3">
                <a href="">
                    Add Faculty
                </a>
            </div>
            <div class="u4">
                <a href="">
                    Add Course
                </a>
            </div>
        </div>
        <div class="dlo">
            <div class="l1">
                <a href="">
                    Add Schedule
                </a>
            </div>
            <div class="l2">
                <a href="">
                    View Student
                </a>
            </div>
            <div class="l3">
                <a href="">
                    View Faculty
                </a>
            </div>
            <div class="l4">
                <a href="">
                    View Manager
                </a>
            </div>
        </div>
    </div>
</body>

</html>