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
            background-color: #fda085;
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
            background-image: linear-gradient(to right, #f6d365 0%, #fda085 100%);
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
                echo "<script> window.location.href = '/user-login'</script>";
            }
            ?>
        </div>
        <div class="anchors">
            <a href="<?= site_url('/user-dashboard') ?>" class="la">Profile </a>
            <a href="<?= site_url('/user-loan-history') ?>" class="la">History </a>
            <a href="<?= site_url('/user-loan') ?>" class="la">Loan </a>
            <button><a href="<?= site_url('/user-logout') ?>">Logout</a></button>
        </div>
    </div>
    <div class="container">
        <div class="man">
            <h2>Name : <?php
                        $session = session();
                        echo $session->get('name');
                        ?></h2>
            <h3>Email : <?php
                        $session = session();
                        echo $session->get('email');
                        ?></h3>
            <h4>
                Account number : <?php
                                    $session = session();
                                    echo $session->get('account_number');
                                    ?>
            </h4>
            <h4>
                Balance : <?php
                            $session = session();
                            echo $session->get('balance');
                            ?>
            </h4>
        </div>
    </div>
    <div class="footer"></div>
</body>

</html>