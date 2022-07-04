<html>

<head>
</head>

<body>
    <?php

    $connect = new mysqli("localhost", "root", "", "mydbs");

    $query = '';
    $table_data = '';

    $filename = "student_data.json";

    $data = file_get_contents($filename);

    $array = json_decode($data, true);

    echo $array;

    //extract row

    foreach ($array as $row) {
        $query .= "insert into student values ('" . $row["name"] . "','" . $row["gender"] . "','" . $row["subject"] . "');";

        $table_data .= '
	<tr>
		<td>' . $row["name"] . '</td>
		<td>' . $row["gender"] . '</td>
		<td>' . $row["subject"] . '</td>
	</tr>';
    }

    if (mysqli_multi_query($connect, $query)) {
        echo '<h2> Data Inserted using PHP and JSON </h2>';
        echo '
		<table border="1">
		<tr>
		<th> Name </th>
		<th> Gender </th>
		<th> Subject </th>
		</tr>
	           ';

        echo $table_data;
        echo '</table>';
    } else {
        echo "not inserted";
    }

    ?>
</body>

</html>