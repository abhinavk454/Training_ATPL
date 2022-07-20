<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
                echo "<script> window.location.href = '/'</script>";
            }
            ?>
        </div>
        <div class="anchors">
            <a href="<?= site_url('/dashboard') ?>" class="la">Profile </a>
            <a href="<?= site_url('/view-customer') ?>" class="la">Customers </a>
            <a href="<?= site_url('/add-customer') ?>" class="la">Account </a>
            <a href="<?= site_url('/email') ?>" class="la">Email </a>
            <a href="<?= site_url('/view-loan') ?>" class="la">Loan </a>
            <button><a href="<?= site_url('/logout') ?>">Logout</a></button>
        </div>
    </div>
    <div class="container">

    </div>
    <div class="footer"></div>
</body>

</html>