<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!--  <link rel="stylesheet" href="./login_style.css">-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Rubik', sans-serif;
        }

        .main {
            position: fixed;
            top: 50%;
            left: 50%;
            height: 550px;
            width: 400px;
            transform: translate(-50%, -50%);
            background-image: linear-gradient(to right, #0099ff, #0066ff);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            border-radius: 10px;
        }

        .h2 {
            font-size: 30px;
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            color: #2f2f2f;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            height: 40%;
            text-align: center;
        }

        input {
            padding: 10px 20px;
            text-align: center;
            border: none;
            border-radius: 10px;
            outline: none;
        }

        input[type="submit"],
        button {
            border-radius: 0px;
            background-color: darkgreen;
            color: white;
            font-weight: bold;
            border: none;
            padding: 15px 30px;
            cursor: pointer;
            border-radius: 4px;
        }

        input:hover,
        button {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            outline: none;
            border: none;
        }

        body {
            text-align: center;
        }

        h1 {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="left">
        <h1>Bank Management Portal</h1>
    </div>
    <div class="main">
        <div class="h2">Admin Login</div>
        <form action="<?= site_url('/login') ?>" method="post">
            <div>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
        </form>
        <button onclick="
        window.location.href = '<?= site_url('/user-login') ?>';
        ">Customer Login</button>
    </div>
</body>

</html>