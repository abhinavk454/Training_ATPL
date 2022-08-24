<?php

$con = mysql_connect("localhost", "root", "");
$db = mysql_select_db("portal");

$a = $_POST["flt_id"];
$b = $_POST["name"];
$c = $_POST["email"];
$d = $_POST["phone"];
$e = $_POST["sal"];


$sql = "UPDATE faculty SET Name='$b', Email=$c, Contact_Number=$d, Salary=$e WHERE ID='$a'";


$res = mysql_query($sql);

if ($res) {
    header("Location:"./view_faculty.php);
} else {
    echo "Data not Updated";
}
