<?php
session_start();
include('./connect_db.php');

// getting login and username from the form
$uname = $_POST['uid'];
$pass = $_POST['password'];

// login query by username and password
$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

// executing the query
