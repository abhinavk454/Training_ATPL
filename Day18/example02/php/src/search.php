<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <link rel="stylesheet" href="./view.css">
</head>

<body>
    <h1>Result</h1>
    <div>
        <h5><a href="./index.html">Home</a></h5>
    </div>
    <div class="form">
        <?php
        include('./connect_db.php');

        $tno = $_POST['tno'];
        $sql = "SELECT * FROM telephone WHERE `tno` = '$tno'";

        $res = $conn->query($sql);

        if ($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            echo "<table>";
            echo "<tr><td>Telephone No</td><td>$row[tno]</td></tr>";
            echo "<tr><td>Full Name</td><td>$row[fullname]</td></tr>";
            echo "<tr><td>Address</td><td>$row[address]</td></tr>";
            echo "<tr><td>State</td><td>$row[state]</td></tr>";
            echo "<tr><td>Pin</td><td>$row[pin]</td></tr>";
            echo "<tr><td>Deposit</td><td>$row[deposit]</td></tr>";
            echo "</table>";
        } else {
            echo "No result";
        }
        ?>
    </div>
</body>

</html>