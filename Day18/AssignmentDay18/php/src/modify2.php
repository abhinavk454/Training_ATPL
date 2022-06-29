<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify 2</title>
    <link rel="stylesheet" href="./insert.css">
</head>

<body>
    <h1>Modify Your Data</h1>
    <div>
        <h5><a href="./index.html">Home</a></h5>
    </div>
    <?php
    include('./connect_db.php');

    $tno = $_GET['tno'];
    $get_by_tno = "SELECT * FROM telephone WHERE tno='$tno'";
    $output = $conn->query($get_by_tno);
    $final_o = $output->fetch_all(MYSQLI_ASSOC);
    $fname = $final_o[0]['fullname'];
    $address = $final_o[0]['address'];
    $state = $final_o[0]['state'];
    $pin = $final_o[0]['pin'];
    $deposit = $final_o[0]['deposit'];
    echo "<form action='./modify3.php' method='post'>";
    echo "<input class='input' type='text' name='tno' value='$tno'>";
    echo "<input class='input' type='text' name='fullname' value='" . $fname . "'>";
    echo "<input class='input' type='text' name='address' value='" . $address . "'>";
    echo "<input class='input' type='text' name='state' value='" . $state . "'>";
    echo "<input class='input' type='text' name='pin' value='" . $pin . "'>";
    echo "<input class='input' type='text' name='deposit' value='" . $deposit . "'>";
    echo "<input class='input' id='btn' type='submit' value='Modify'>";
    echo "</form>";
    ?>
</body>

</html>