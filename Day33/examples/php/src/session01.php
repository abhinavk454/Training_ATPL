<?php
session_start();
include './connect_db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session - Examples</title>
</head>

<body>
    <center>
        <?php
        $id = session_id();
        $aa = $_POST['uname'];
        $bb = $_POST['password'];
        $sql = "SELECT * FROM `user` WHERE `name`='$aa' AND `password`='$bb'";
        $result = $conn->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                if ($data['role'] == 'admin') {
                    $admin_s_i = 'insert into session(`session_id`,`user_id`) values("' . $id . '","' . $data['user_id'] . '")';
                    $res = $conn->query($admin_s_i);
                    if ($res) {
                        echo '<h1>Welcome Admin</h1>';
                        // get all details of user with session table joined
                        $sql = "SELECT * FROM `user` INNER JOIN `session` ON `user`.`user_id`=`session`.`user_id`";
                        $q_result = $conn->query($sql);
                        if ($q_result->num_rows > 0) {
                            echo "<table border='1'>";
                            echo "<tr><th>User ID</th><th>User Name</th><th>User Role</th><th>Session ID</th><th>Created At</th></tr>";
                            while ($row = $q_result->fetch_assoc()) {
                                echo "<tr><td>" . $row['user_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['role'] . "</td><td>" . $row['session_id'] . "</td><td>" . $row['timestamp'] . "</td></tr>";
                            }
                            echo "</table>";
                            echo '<a href="./logout.php">Logout</a>';
                        } else {
                            echo "No data found";
                            echo '<a href="./logout.php">Logout</a>';
                        }
                    } else {
                        echo $conn->error;
                    }
                } elseif ($data['role'] == 'user') {
                    $user_s_i = 'insert into session(`session_id`,`user_id`) values("' . $id . '","' . $data['user_id'] . '")';
                    $res = $conn->query($user_s_i);
                    if ($res) {
                        echo '<h1>Welcome User</h1>';
                        // get all details of user with session table joined
                        $sql = "SELECT * FROM `user` INNER JOIN `session` ON `user`.`user_id`=`session`.`user_id` WHERE `name`='$aa'";
                        $q_result = $conn->query($sql);
                        if ($q_result) {
                            if ($q_result->num_rows > 0) {
                                echo "<table border='1'>";
                                echo "<tr><th>User ID</th><th>User Name</th><th>User Role</th><th>Session ID</th><th>Created At</th></tr>";
                                while ($row = $q_result->fetch_assoc()) {
                                    echo "<tr><td>" . $row['user_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['role'] . "</td><td>" . $row['session_id'] . "</td><td>" . $row['timestamp'] . "</td></tr>";
                                }
                                echo "</table>";
                                echo '<a href="./logout.php">Logout</a>';
                            } else {
                                echo "No data found";
                                echo '<a href="./logout.php">Logout</a>';
                            }
                        } else {
                            echo $conn->error;
                        }
                    } else {
                        echo '<h1>Error</h1>';
                    }
                } else {
                    echo '<script>alert("You are not authorized to access this page!");</script>';
                    echo '<script>window.location.href="index.php";</script>';
                }
            } else {
                echo '<script>alert("Invalid username or password!");</script>';
                echo '<script>window.location.href="index.php";</script>';
            }
        } else {
            echo '<script>alert("Invalid username or password!");</script>';
            echo '<script>window.location.href="index.php";</script>';
        }
        ?>
    </center>
</body>

</html>