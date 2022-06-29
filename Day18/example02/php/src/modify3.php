<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify 3</title>
</head>

<body>
    <?php
    include('./connect_db.php');

    $tno = $_POST['tno'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];
    $deposit = $_POST['deposit'];
    $update_by_tno = "UPDATE telephone SET fullname='$fullname', address='$address', state='$state', pin='$pin', deposit='$deposit' WHERE tno='$tno'";
    $conn->query($update_by_tno);
    if ($conn->query($update_by_tno) === TRUE) {
        echo "Success";
        // header("Location: http://localhost:8000/view.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    ?>
</body>

</html>