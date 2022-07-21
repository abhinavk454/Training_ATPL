<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session - Examples</title>
</head>

<body>
    <?php
    $id = session_id();
    $aa = $_POST['uname'];
    $bb = $_POST['password'];
    if ($aa == "") {
        echo "<font color='red'>field blank</font/>";
    } else {
        if ($aa == 'ss' && $bb == '1234') {
            echo "<br> session id" . $id;
            $_SESSION['usr'] = $aa;
            $_SESSION['sesID'] = $id;
            echo "<br>Logged: " . $_SESSION['usr'];
            echo "<a href='./session02.php'>Proceed</a>";
        } else {
            echo "<font color='red'>Invalid</font>";
            echo "<a href='./index.php'>Go Back</a>";
        }
    }

    ?>
</body>

</html>