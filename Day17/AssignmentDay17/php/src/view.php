<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All</title>
</head>

<body>
    <?php
    $host = 'db';
    $user = 'MYSQL_USER';
    $pass = 'MYSQL_PASSWORD';
    $mydatabase = 'telephone';

    $conn = new mysqli($host, $user, $pass, $mydatabase);

    $sql = "SELECT * FROM telephone";

    $req = $conn->query($sql);

    if ($req) {
        $res = $req->fetch_all(MYSQLI_ASSOC);
        echo "<table>";
        echo "<tr>";
        echo "<th>Telephone No</th>";
        echo "<th>Full Name</th>";
        echo "<th>Address</th>";
        echo "<th>State</th>";
        echo "<th>PIN</th>";
        echo "<th>Deposit</th>";
        echo "</tr>";
        foreach ($res as $row) {
            echo "<tr>";
            echo "<td>" . $row["tno"] . "</td>";
            echo "<td>" . $row["fullname"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "<td>" . $row["state"] . "</td>";
            echo "<td>" . $row["pin"] . "</td>";
            echo "<td>" . $row["deposit"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Error";
    }
    ?>
</body>

</html>