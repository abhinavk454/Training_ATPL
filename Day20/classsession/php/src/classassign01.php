<?php

$host = 'db';
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';
$db = 'atpl';

$conn = new mysqli($host, $user, $pass, $db);

$query = '';
$table_data = '';

$filename = './data.json';

/**
 * Getting the data from the JSON file
 * to associative array object.
 */

$data = file_get_contents($filename);
$array = json_decode($data, true);

/**
 * Extracting the data from the associative array object
 * to the database.
 */
foreach ($array as $ele) {
    $query .= "insert into person values('" . $ele['customer_id'] . "','" . $ele['name'] . "','" . $ele['address'] . "','" . $ele['age'] . "');";
    $table_data .= '
    <tr>
        <td>' . $ele['customer_id'] . '</td>
        <td>' . $ele['name'] . '</td>
        <td>' . $ele['address'] . '</td>
        <td>' . $ele['age'] . '</td>   
    </tr>';
}

/**
 * Executing the query.
 * If the query is successful,
 * the data is inserted into the database.
 * If the query is not successful,
 * the data is not inserted into the database.
 */

if (mysqli_multi_query($conn, $query)) {
    echo '<h2> Data Inserted using PHP to SQL </h2>';
    echo '
        <table border="1">
        <tr>
        <th> Customer ID </th>
        <th> Name </th>
        <th> Address </th>
        <th> Age </th>
        </tr>
            ';
    echo $table_data;
    echo '</table>';
} else {
    echo "Not inserted" . $conn->error;
}
