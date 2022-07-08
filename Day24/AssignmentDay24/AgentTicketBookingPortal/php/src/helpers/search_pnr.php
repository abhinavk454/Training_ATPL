<?php
session_start();
include('../configs/db.php');

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking Dashboard</title>
    <link rel="stylesheet" href="../styles/style_d.css">
    <script>
        var xmlHttp;

        function showUser(str) {
            xmlHttp = GetXmlHttpObject();
            if (xmlHttp == null) {
                alert("Browser does not support HTTP Request");
                return;
            }

            var url = "find_pnr.php";

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
                xmlHttp = new XMLHttpRequest();
            } catch (e) {
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
    <div class="nav">
        <div class="ty">
            <h2>Welcome : <?php echo $username ?></h2>
        </div>
        <div class="tz">
            <a href="../helpers/search_pnr.php">Search by PNR</a>
            <a href="../helpers/logout.php">Logout</a>
        </div>
    </div>
    <div class="flex-container">
        <div class="content-container">
            <div class="form-container">
                <form />
                <h4 align="center"> Enter PNR:
                    <input type="number" name="pnr" value="Enter PNR no " size="25" onFocus="this.value=''" onKeyUp="showUser(this.value);" />
                </h4>
                </form>
                <div id="txtHint" align="center"> <b> </b>
                </div>

            </div>
        </div>
    </div>
    <div class="footer">
        <h4>
            <a href="../views/booking_dashboard.php">Back to Dashboard</a>
        </h4>
    </div>
</body>

</html>