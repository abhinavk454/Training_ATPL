<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mulish&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Rampart+One&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Mulish', sans-serif;
        }

        body {
            background: #f2f2f2;
            display: flex;
            width: 100vw;
            height: 100vh;
        }

        .left {
            padding: 10px;
            background-color: slateblue;
            width: 20%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: white;
        }

        .right {
            padding: 10px;
            background-image: url('./bg2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 80%;
            height: 100vh;
            display: flex;
        }

        button {
            text-align: center;
            border-radius: 25px;
            padding: 10px 35px;
            border: none;
            background-color: cornflowerblue;
            margin-bottom: 10px;
            color: white;
            font-family: 'Rampart One', cursive;
            text-transform: uppercase;
            cursor: pointer;
        }

        h3 {
            margin-top: 50px;
            text-transform: uppercase;
            text-align: center;
        }

        h1 {
            text-transform: uppercase;
            font-size: 40px;
            text-align: center;
            font-family: 'Rampart One', cursive;
        }

        .oth {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .um>h3 {
            font-size: 28px;
            font-family: 'Rampart One', cursive;
            text-transform: uppercase;
        }

        th {
            font-family: 'Rampart One', cursive;
        }
    </style>
</head>

<body>
    <div class="left">
        <div class="zim">
            <h1>Dashboard</h1>
            <h3>Welcome {{ session()->get('admin.name') }}</h3>
        </div>
        <div class="oth">
            <a href="/client">
                <button>Clients</button>
            </a>
            <a href="/projects">
                <button>Projects</button>
            </a>
            <a href="/tasks">
                <button>Tasks</button>
            </a>
            <a href="/logout">
                <button>Log Out</button>
            </a>

        </div>
    </div>
    <div class="right">

    </div>
</body>

</html>
