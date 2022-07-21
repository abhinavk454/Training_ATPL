<?php
session_start();
echo "Logged: " . $_SESSION['usr'];
echo "Session ID: " . $_SESSION['sesID'];
?>
<html>

<body>
    <h2>Admin Home Page</h2>
    <p>This is admin page.....</p>
    <a href="./session03.php">Take me next page.</a>
</body>

</html>