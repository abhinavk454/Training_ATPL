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
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <div class="header">
        <h1>Ticket Booking Dashboard</h1>
    </div>
    <div class="nav">
        <h4>Welcome : <?php echo $username ?></h4>
        <a href="../helpers/logout.php">Logout</a>

    </div>
    <div class="flex-container">
        <div class="content-container">
            <div class="form-container">
                <form action="../helpers/booking.php" method="POST">
                    <h1>Book Tickets</h1>
                    <br>
                    <br>
                    <span class="subtitle">NAME:</span>
                    <br>
                    <input type="text" name="name" id="" required>
                    <br>
                    <span class="subtitle">DATE OF JOURNEY:</span>
                    <br>
                    <input type="date" name="date_journey" id="" required>
                    <br>
                    <span class="subtitle">TOTAL PASSENGERS:</span>
                    <br>
                    <input type="number" name="total_pessengers" id="" required>
                    <br>
                    <span class="subtitle">TOTAL ADULTS:</span>
                    <br>
                    <input type="number" name="total_adults" id="" required>
                    <br>
                    <span class="subtitle">TOTAL CHILDREN:</span>
                    <br>
                    <input type="number" name="total_kids" id="" required>
                    <br>
                    <span class="subtitle">SELECT DESTINATION:</span>
                    <br>
                    <select name="destination_id" id="" required>
                        <option value="">Select Destination</option>
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option>
                        <option value="4">D</option>
                        <option value="5">E</option>
                    </select>
                    <br>
                    <span class="subtitle">SELECT SOURCE:</span>
                    <br>
                    <select name="source_id" id="" required>
                        <option value="">Select Source</option>
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option>
                        <option value="4">D</option>
                        <option value="5">E</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" value="BOOK" class="submit-btn">
                </form>
            </div>
        </div>
    </div>
    <div class="footer"></div>
</body>

</html>