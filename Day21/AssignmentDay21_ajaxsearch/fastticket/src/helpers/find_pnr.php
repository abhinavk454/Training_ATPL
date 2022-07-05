<?php

$hostname = 'db';
$username = 'MYSQL_USER';
$password = 'MYSQL_PASSWORD';
$database = 'atpl';

$conn = new mysqli($hostname, $username, $password, $database);

$q = $_GET["q"];

echo $q;

$name = "";
$no_adult = "";
$no_kids = "";
$src_station = "";
$dest_station = "";
$date_of_j = "";




if ($q != "") {

    $sql = "SELECT * FROM pessangers WHERE pnr like '$q%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<br> <br>";
        echo "<table width=500 cellspacing=10>";
        echo "<tr><th>Name</th><th>No of Adults </th><th>No of Kids</th><th>Source Station</th> <th>Destination Station</th><th>Date of Journey</th>";
        echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $no_adult = $row['no_adults'];
            $no_kids = $row['no_kids'];
            $src_station = $row['source_id'];
            $dest_station = $row['destination_id'];
            $date_of_j = $row['date_journey'];
            echo "<tr>";
            echo "<td align=center>" . $name . "</td>";
            echo "<td align=center>" . $no_adult . "</td>";
            echo "<td align=center>" . $no_kids . "</td>";
            echo "<td align=center>" . $src_station . "</td>";
            echo "<td align=center>" . $dest_station . "</td>";
            echo "<td align=center>" . $date_of_j . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else
        echo $conn->error;
    // echo " No Employee Found ";
}
