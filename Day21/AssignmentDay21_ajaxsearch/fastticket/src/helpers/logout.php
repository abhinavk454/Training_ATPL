<?php
session_start();
include('../configs/db.php');
session_destroy();
header('Location: ../index.html');
