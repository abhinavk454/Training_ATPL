<?php session_start(); ?>

<html>

<body>

    <h1> This is the home page </h1>

    <?php

    $s = $_SESSION["uid"];

    echo "<h3> Welcome " . $s . "</h3>";
    ?>

</body>

</html>