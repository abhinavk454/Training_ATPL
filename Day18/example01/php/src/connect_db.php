<?php

echo "Deployed from docker.\n";

$host = 'db';
$user = 'MYSQL_USER';
$pass = 'MYSQL_PASSWORD';
$db = 'MYSQL_DATABASE';

$conn = new mysqli($host, $user, $pass, $db);
