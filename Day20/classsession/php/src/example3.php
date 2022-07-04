<html>

<head>
</head>

<body>
    <?php
    echo "Nested JSON";

    function myValues($x)
    {
        global $count;
        global $values;

        //check an array is empty or not
        if (!is_array($x)) {
            die("ERROR:Array Input is not define");
        }

        //Loop to access all the values
        foreach ($x as $key => $value) {
            if (is_array($value)) {
                myValues($value);
            } else {
                $values[] = $value;
                $count++;
            }
        }

        //return total count and value found in array
        return array('total' => $count, 'values' => $values);
    }
    //function end

    $json = '{
        "student":
        {
        "name":"Neha Roy",
        "course":"PHP",
        "year":2022,
        "module":["HTML","CSS","PHP"],
        "installment":{
	        "jan":"3500","feb":"2500"
            }
         }
}';

    $x = json_decode($json, true);
    //call a function and print all values
    $res = myValues($x);
    echo "<table>";
    echo "<tr><th>Key</th><th>Value</th></tr>";
    foreach ($res["values"] as $key => $value) {
        echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
    }
    echo "</table>";
    ?>

</body>

</html>