<!DOCTYPE html>
<html>

<body>

    <?php
    $json = '{"X":23,"Y":46,"Z":38} ';
    //php object
    $x = json_decode($json, true);
    foreach ($x as $k => $v) {
        echo "Key" . $k . "Value" . $v . "<br/>";
    }
    //echo $x["X"];
    // associative array
    //$x=json_decode($json);
    //echo $x->X;
    ?>

</body>

</html>