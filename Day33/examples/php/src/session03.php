<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <script>
        function preventBack() {
            window.history.forward();
        }
        setTimeout('preventBack()', 0);
        window.onunload = function() {
            null
        };
    </script>
</head>

<body>
    <h3>Home</h3>
    <hr>
    <a href="./logout.php">Log Out</a>
</body>

</html>