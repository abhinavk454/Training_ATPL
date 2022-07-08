<?php

$host = 'db';
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';
$db = 'MYSQL_DATABASE';

$conn = new mysqli($host, $user, $pass, $db);

$q = $_GET["q"];

echo $q;

$c = "";
$d = "";
$e = "";
$f = "";
$g = "";
$h = "";




if ($q != "") {

    $sql = "SELECT * FROM employee WHERE emp_name like '$q%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<br> <br>";
        echo "<table width=500 cellspacing=10>";
        echo "<tr><th>EmpID</th><th>Branch ID </th><th>Name</th><th>Phone</th>";
        //echo " <th colspan='2'> Action </th> ";
        echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            $c = $row['emp_id'];
            $d = $row['branch_id'];
            $q = $row['emp_name'];
            $e = $row['phone'];
            echo "<tr>";
            echo "<td align=center>" . $c . "</td>";
            echo "<td align=center>" . $d . "</td>";
            echo "<td align=center>" . $q . "</td>";
            echo "<td align=center>" . $e . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else
        echo " No Employee Found ";
}
