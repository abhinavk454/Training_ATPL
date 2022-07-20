<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Rubik', sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            width: 100vw;
        }

        .header {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            background-image: linear-gradient(to right, #0074ff 0%, #0074f0 100%);
            width: 100%;
            height: 10%;
            padding: 25px;
        }

        .icons {
            font-size: 20px;
            text-transform: uppercase;
        }

        .man {
            width: 500px;
            height: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            justify-content: center;
        }

        .man * {
            padding: 10px;
        }

        .la {
            font-size: 17px;
            margin-right: 17px;
            color: black;
        }

        a {
            text-decoration: none;
            text-transform: uppercase;
            color: black;
        }

        button {
            background-color: darkgreen;
            color: white;
            border: none;
            margin-top: 10px;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 12px;
            text-transform: uppercase;
            cursor: pointer;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;

            width: 100%;
            height: 90%;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 20px;
        }

        input {
            padding: 15px 40px;
            margin-top: 20px;
            border: none;
            outline: none;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 300px;
            border-radius: 5px;
            color: black;
        }

        input[type="submit"] {
            width: 200px;
            border-radius: 5px;
            background-color: darkgreen;
            color: white;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="icons">
            <?php
            $session = session();
            if ($session->get('name') != null) {
                echo "Welcome" . " " . $session->get('name');
            } else {
                echo "<script> alert('Session Expired Please Login Again')</script>";
                echo "<script> window.location.href = '/user-login'</script>";
            }
            ?>
        </div>
        <div class="anchors">
            <a href="<?= site_url('/user-dashboard') ?>" class="la">Profile </a>
            <a href="<?= site_url('/user-loan-history') ?>" class="la">History </a>
            <a href="<?= site_url('/user-loan') ?>" class="la">Loan </a>
            <a href="<?= site_url('/change-password') ?>" class="la">Password </a>
            <button><a href="<?= site_url('/user-logout') ?>">Logout</a></button>
        </div>
    </div>
    <div class="container">
        <form action="<?= site_url('/change-password') ?> " method="post">
            <input type="text" placeholder="Enter New Password" name="password" required>
            <input type="text" placeholder="Confirm New Password" name="confirm_password" required>
            <button type="submit" name="submit">Change Password</button>
        </form>
    </div>
    <div class="footer"></div>
</body>

</html>