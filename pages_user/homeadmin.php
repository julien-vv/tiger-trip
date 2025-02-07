<?php
session_start();
error_reporting(0);
if ($user['type'] == 'user'){
  header("Location: ../home.php");
}
?>

<!doctype html>
<html lang="en" xmllns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Read data from database</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="../pages_css/home.css" />
  <title>Tiger Trip Home</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
<header>
    <nav id="navbar" class="navbar fixed-top">
      <ul>
        <li><a class="nav-link scrollto active" href="../home.php">Home</a></li>
        <li><a class="nav-link scrollto" href="../island.php">Islands</a></li>
        <li><a class="nav-link scrollto" href="../city.php">Cities</a></li>
        <li><a class="nav-link scrollto" href="../kl.php">Kuala Lumpur</a></li>
        <li><a class="nav-link scrollto" href="login.php">Login</a></li>
        <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
        <li><a class="nav-link scrollto" href="homeadmin.php">Admin</a></li>
      </ul>
      <img id="logo" src="../images_home/logoTiger.png" alt="Tiger Logo">
    </nav>
  </header>
<main><br><br>
<div style="text-align: center;">
    <h1 style="margin-top: 60px; font-size: 40px; margin-bottom: 30px;">View data from database: </h1>
    <table style="text-align:center; margin-left: auto; margin-right: auto;">
        <tr>
            <th style="padding-right: 50px; padding-left: 50px;">Type</th>
            <th style="padding-right: 50px; padding-left: 50px;">Name</th>
            <th style="padding-right: 50px; padding-left: 50px;">Email</th>
            <th style="padding-right: 50px; padding-left: 50px;">Password</th>
            <th style="padding-right: 50px; padding-left: 50px;">Update</th>
            <th style="padding-right: 50px; padding-left: 50px;">Delete</th>
        </tr>
        <?php
        require('connection.php');
        $sql = "SELECT * FROM persons";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) <= 0) {
            die("<script>alert('No data from database!');</script>");
        }

            while ($rows = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $rows['type'] . "</td>";
                echo "<td>" . $rows['username'] . "</td>";
                echo "<td>" . $rows['email'] . "</td>";
                echo "<td>" . $rows['password'] . "</td>";
                echo "<td><a href='update_user.php?id=" . $rows['id'] . "'><button>Update</button></a></td>";
                echo "<td><a href='delete_user.php?id=" . $rows['id'] . "'><button>Delete</button></a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <br>
    <a href="add_user.php"> Add User </a>
</div>
</main>
</body>
</html>