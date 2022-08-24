<?php

$con = mysql_connect("localhost", "root", "");
$db = mysql_select_db("portal");

$a = $_POST["std_id"];
$b = $_POST["name"];
$c = $_POST["email"];
$d = $_POST["phone"];
$e = $_POST["course"];


$sql = "UPDATE students SET Name='$b', Email=$c, Contact_Number=$d, Course=$e WHERE Registration_Number='$a'";


$res = mysql_query($sql);

if ($res) {
    header("Location: ./view_student.php");
} else {
    echo "Data not Updated";
}
