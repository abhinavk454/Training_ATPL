<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify 2</title>
</head>

<body>
    <?php
    $host = 'db';
    $user = 'MYSQL_USER';
    $pass = 'MYSQL_PASSWORD';
    $mydatabase = 'telephone';

    $conn = new mysqli($host, $user, $pass, $mydatabase);

    $tno = $_GET['tno'];
    $get_by_tno = "SELECT * FROM telephone WHERE tno='$tno'";
    $output = $conn->query($get_by_tno);
    echo "<form action='./modify3.php'> method='post'>";
    echo "<input type='text' name='tno' value='$tno'>";
    echo "<input type='text' name='fullname' value='" . $output->fetch_assoc()['fullname'] . "'>";
    echo "<input type='text' name='address' value='" . $output->fetch_assoc()['address'] . "'>";
    echo "<input type='text' name='state' value='" . $output->fetch_assoc()['state'] . "'>";
    echo "<input type='text' name='pin' value='" . $output->fetch_assoc()['pin'] . "'>";
    echo "<input type='text' name='deposit' value='" . $output->fetch_assoc()['deposit'] . "'>";
    echo "<input type='submit' value='Modify'>";
    echo "</form>";
    ?>
</body>

</html>