<?php
// if session is set redirect to respective routes
if (isset($_SESSION['username'])) {
  if ($_SESSION['role'] == 'admin') {
    header("Location: ./admin-dashboard.php");
  } else if ($_SESSION['role'] == 'manager') {
    header("Location: ./management-dashboard.php");
  } else if ($_SESSION['role'] == 'faculty') {
    header("Location: ./faculty-dashboard.php");
  } else {
    header("Location: ./student-dashboard.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Management Portal</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
    }

    body {
      display: flex;
      width: 100vw;
      height: 100vh;
      background-image: url("./bg.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }

    .left {
      width: 70%;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .right {
      width: 30%;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    form {
      width: 100%;
      height: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: space-around;
      margin: auto;
    }

    input[type="text"],
    input[type="password"],
    select {
      width: 80%;
      height: 50px;
      background-color: transparent;
      border: none;
      border-bottom: 2px solid #000;
      padding: 0 10px;
      font-size: 16px;
      margin: 10px;
      outline: none;
      text-align: center;
    }

    input[type="submit"] {
      width: 80%;
      height: 50px;
      background-color: #000;
      border: none;
      color: #fff;
      font-size: 16px;
      margin: 10px;
      outline: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #fff;
      color: #000;
    }

    .oth {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin: auto;
      text-align: center;
    }

    .oth>h2 {
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    .oth>img {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="left"></div>
  <div class="right">
    <div class="oth">
      <h2>Student Management Portal</h2>
      <img src="./logo.png" alt="" srcset="" width="200px" height="100px" />
    </div>
    <form action="#" method="post">
      <div class="flash"></div>
      <div class="form-group">
        <input type="text" id="username" name="username" placeholder="Enter username" autocomplete="email" required />
      </div>
      <div class="form-group">
        <input type="password" id="password" name="password" placeholder="Enter password" autocomplete="off" required />
      </div>
      <div class="form-group">
        <select name="role" id="">
          <option value="student">Student</option>
          <option value="admin">Admin</option>
          <option value="manager">Manager</option>
          <option value="Faculty">Faculty</option>
        </select>
      </div>

      <input type="submit" value="Login" />
    </form>
  </div>
</body>

</html>