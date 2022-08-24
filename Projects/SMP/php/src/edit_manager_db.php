<?php

$con = mysql_connect("localhost", "root", "");
$db = mysql_select_db("portal");

$a = $_POST["mgmt_id"];
$b = $_POST["name"];
$c = $_POST["email"];
$d = $_POST["phone"];
$e = $_POST["access_r"];


$sql = "UPDATE management SET Name='$b', Email=$c, Contact_Number=$d, Access_Rights=$e WHERE ID='$a'";


$res = mysql_query($sql);

if ($res) {
    header("Location: ./view_management.php");
} else {
    echo "Data not Updated";
}
