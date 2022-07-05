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
                <?php
                $name = $_POST['name'];
                $date_journey = $_POST['date_journey'];
                $total_pessengers = $_POST['total_pessengers'];
                $total_adults = $_POST['total_adults'];
                $total_kids = $_POST['total_kids'];
                $destination_id = $_POST['destination_id'];
                $source_id = $_POST['source_id'];

                $s_s_details = "SELECT * FROM stations WHERE id='$source_id'";
                $d_s_details = "SELECT * FROM stations WHERE id='$destination_id'";

                $s_s_result = $conn->query($s_s_details);
                $d_s_result = $conn->query($d_s_details);

                $s_s_row = $s_s_result->fetch_assoc();
                $d_s_row = $d_s_result->fetch_assoc();

                $cost = ($s_s_row['DISTANCE'] + $d_s_row['DISTANCE']) * $total_pessengers;

                $sql = "INSERT INTO pessangers (name, date_journey, total_pessengers, no_kids, no_adults, source_id, destination_id, cost) VALUES ('$name', '$date_journey', '$total_pessengers', '$total_kids', '$total_adults', '$source_id', '$destination_id', '$cost')";

                $result = $conn->query($sql);
                if ($result) {
                    $ud = "select pnr, cost from pessangers where name='$name' and date_journey='$date_journey' and total_pessengers='$total_pessengers' and no_kids='$total_kids' and no_adults='$total_adults' and source_id='$source_id' and destination_id='$destination_id' and cost='$cost'";
                    $ud_result = $conn->query($ud);
                    $ud_row = $ud_result->fetch_assoc();
                    $pnr = $ud_row['pnr'];
                    $cost = $ud_row['cost'];
                    // echo "<br>PNR: $pnr<br>Cost: $cost";
                } else {
                    echo "Booking Failed" . $conn->error;
                }
                ?>
                <div class="output">
                    <h2>
                        <span>Booking Details</span>
                    </h2>
                    <br>
                    <h3>NAME: <?php echo $name ?></h3>
                    <br>
                    <h3>PNR: <?php echo $pnr ?></h3>
                    <br>
                    <h3>Cost: <?php echo $cost ?></h3>
                    <br>
                    <br>
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