<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title - @yield('title')</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+SC&family=Kdam+Thmor+Pro&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cormorant SC', serif;
        }

        .message {
            margin: 0 auto;
            width: 50%;
            text-align: center;
        }

        body {
            background: lightblue;
        }

        .alert {
            color: #36f478;
        }

        .form {
            width: 400px;
            height: 500px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #04AA6D;
            margin: auto;
            border-radius: 15px;
            {{-- box-shadow: 0px 0px 10px #000; --}}
        }

        form>input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 60%;
            height: 40px;
            border: none;
            outline: none;
            border-radius: 5px;
            padding: 0 10px;
            margin-bottom: 10px;
            margin: auto;
            text-align: center;
            border-radius: 25px;
        }

        input[type="submit"] {
            width: 30%;
            height: 40px;
            border: none;
            padding: 0 10px;
            margin-bottom: 10px;
            background-color: #f44336;
            color: white;
            margin: auto;
            cursor: pointer;
            text-align: center;
            border-radius: 15px;
        }

        button {
            width: 130px;
            height: 40px;
            border: none;
            background-color: #f44336;
            color: white;
            text-align: center;
            cursor: pointer;
            border-radius: 15px;
        }

        input[type="file"] {
            width: 50%;
            height: 40px;
            border: none;
            margin: auto;
            text-align: center;
            border-radius: 5px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            text-align: center;
            margin-top: 30px;
        }

        th {
            height: 70px;
            border-bottom: 1px solid #ddd;
            padding: 2%;
            background-color: #04AA6D;
            color: white;

        }

        .nav {
            width: 100%;
            height: 50px;
            background-color: #04AA6D;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td {
            vertical-align: top;
            justify-content: center;
            border-bottom: 1px solid #ddd;
            padding: 2%;
        }

        tr:hover {
            background-color: rgba(222, 150, 15, 0.317);
        }

        a {
            text-decoration: none;
            color: black;
        }

        img {
            border-radius: 50%;
        }

        .avtr {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        input:hover {
            border: none;
            outline: none;
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
