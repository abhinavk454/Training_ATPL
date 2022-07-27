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

        .cus_t {
            display: flex;
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

        th,
        td {
            padding: 2px;
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
            <a href="#" class="la">Profile </a>
            <a href="<?= site_url('/view-customer') ?>" class="la">Customers </a>
            <a href="<?= site_url('/add-customer') ?>" class="la">Account </a>
            <a href="#" class="la">Loan </a>
            <button><a href="<?= site_url('/logout') ?>">Logout</a></button>
        </div>
    </div>
    <div class="container">
        <?php
        if (isset($customers)) {
            echo "<table border='1' cellspacing='0' cellpadding='3'  >";
            echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Email</th>";
            echo "<th>Account Number</th>";
            echo "<th>Balance</th>";
            echo "<th>Password</th>";
            // echo "<th>Action</th>";
            echo "</tr>";
            foreach ($customers as $customer) {
                echo "<tr>";
                echo "<td>" . $customer['name'] . "</td>";
                echo "<td>" . $customer['email'] . "</td>";
                echo "<td>" . $customer['account_number'] . "</td>";
                echo "<td>" . $customer['balance'] . "</td>";
                echo "<td>" . $customer['password'] . "</td>";
                // echo "<td><a href='" . site_url('/edit-customer/' . $customer['user_id']) . "'>Edit</a> | <a href='" . site_url('/delete-customer/' . $customer['user_id']) . "'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<h2>No Customers Found</h2>";
        }
        ?>
    </div>
    <div class="footer">
    </div>
</body>

</html>