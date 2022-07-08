<?php
session_start();
include('./connect_db.php');

$username = $_SESSION['username'];
$name = $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./styles.css">
    <script>
        var xmlHttp;

        function showUser(str) {
            xmlHttp = GetXmlHttpObject();
            if (xmlHttp == null) {
                alert("Browser does not support HTTP Request");
                return;
            }

            var url = "get_students.php";

            url = url + "?q=" + str;

            url = url + "&sid=" + Math.random();

            xmlHttp.onreadystatechange = stateChanged;

            xmlHttp.open("GET", url, true);
            xmlHttp.send(null);
        }

        function stateChanged() {
            if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
                document.getElementById("txtHint").innerHTML = xmlHttp.responseText;
            }
        }

        function GetXmlHttpObject() {
            var xmlHttp = null;
            try {
                // Firefox, Opera 8.0+, Safari
                xmlHttp = new XMLHttpRequest();
            } catch (e) {
                //Internet Explorer
                try {
                    xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
            }
            return xmlHttp;
        }
    </script>
</head>

<body>
    <div class="header">
        <h2>Welcome <?php $name = $_SESSION['name'];
                    echo $name ?>
        </h2>
        <div class="right"> Search
            <input type="text" name="user" value="Enter Student Name " size="25" onFocus="this.value=''" onKeyUp="showUser(this.value);" />

            <a href="./admin_dashboard.php">Back to dashboard</a>
            <a href="./a_logout.php">Log Out</a>
        </div>
    </div>
    <div id="txtHint" align="center">
    </div>
</body>

</html>