<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Client Managment</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rampart+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Mulish&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Rampart One', cursive;
        }

        body {
            background: #f2f2f2;
            display: flex;
            width: 100vw;
            height: 100vh;
        }

        .left {
            padding: 10px;
            background-image: url('./bgl.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 50%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }

        .right {
            padding: 10px;
            background-image: url('./bg2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 50%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }

        form {
            width: 100%;
            height: 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            height: 30px;
            border: none;
            border-radius: 25px;
            padding: 10px auto;
            margin-bottom: 10px;
            text-align: center;
            font-family: 'Mulish', sans-serif;
        }

        input[type="submit"] {
            text-align: center;
            border-radius: 25px;
            padding: 10px 25px;
            border: none;
            background-color: cornflowerblue;
            margin-bottom: 10px;
            color: white;
            cursor: pointer;
        }

        h2 {
            text-align: center;
            color: cornflowerblue;
            font-size: 50px
        }

        h1 {
            text-align: center;
            color: cornflowerblue;
            font-size: 40px;
        }

        .st {
            background-image: url('./cl.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        label {
            font-family: 'Mulish', sans-serif;
            margin-bottom: 4px;
        }
    </style>
</head>

<body>
    <div class="st">
        <h1>Client Management Portal </h1>
    </div>
    <div class="left">
        <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
            <div class="up">
                <label for="email">Username </label>
                <input type="text" name="username" id="username" placeholder="Enter Username" required>
            </div>
            <div class="midd">
                <label for="password">Password </label>
                <input type="password" name="password" id="password" placeholder="Enter Password" required>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
    <div class="right">
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf
            <div class="up">
                <label for="name">Name </label>
                <input type="text" name="name" id="name" placeholder="Enter Name" required>
            </div>
            <div class="midd">
                <label for="email">Email </label>
                <input type="email" name="email" id="email" placeholder="Enter Email" required>
            </div>
            <div class="midd">
                <label for="username">Username </label>
                <input type="text" name="username" id="username" placeholder="Enter Username" required>
            </div>
            <div class="midd">
                <label for="password">Password </label>
                <input type="password" name="password" id="password" placeholder="Enter Password" required>
            </div>
            <input type="submit" value="Register">
        </form>
    </div>
</body>

</html>
