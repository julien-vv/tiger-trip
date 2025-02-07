<?php
require('connection.php');
session_start();
error_reporting(0);

if (isset($_POST['username'],$_POST['password'])){

  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($con, $username);
  $_SESSION['username'] = $username;



  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con, $password);

    $query = "SELECT * FROM `persons` WHERE username='$username' 
  AND password ='$password'";
  
  $result = mysqli_query($con,$query);
  
  if ($row = mysqli_fetch_array($result)) {

    if ($row['type'] == 'Admin') {
      header('location: homeadmin.php');      
    }else{
      header('location: ../home.php');
    }

    $_SESSION['type'] = $row['type'];
    $type = $row['type'];
    echo "<script>alert('$type');</script>";
  }else{
    $message = "Your username or password is incorrect";
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../pages_css/login.css" />
    <title>Tiger Trip Home</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    </head>

<body>
    <div class="page">
    <header>
        <nav id="navbar" class="navbar fixed-top">
          <ul>
            <li><a class="nav-link scrollto active" href="../home.php">Home</a></li>
            <li><a class="nav-link scrollto" href="../island.php">Islands</a></li>
            <li><a class="nav-link scrollto" href="../city.php">Cities</a></li>
            <li><a class="nav-link scrollto" href="../kl.php">Kuala Lumpur</a></li>
            <li><a class="nav-link scrollto" href="login.php">Login</a></li>
            <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
            <?php
             include "connection.php";

             if(isset($_SESSION['type']) && $_SESSION['type'] == 'Admin')
              echo "<li><a class='nav-link scrollto' href='pages_user/homeadmin.php'>Admin</a></li>";
              ?>
          </ul>
          <img id="logo" src="../images_home/logoTiger.png" alt="Tiger Logo">
        </nav>
      </header>

<main>
<div class="flexbox">
    <form class="box" action="" method="post">

        <h1 class="box-title">Login</h1>
        <br>
        <input type="text" class="box-input" name="username" 
        placeholder="Username" required />

<br> <br>

        <input type="password" class="box-input" name="password" 
        placeholder="Password" required />
        <br><br>

        <input type="submit" name="submit" value="Login" class="box-button" />
        <a href="register.php"> Register </a>

        <br><br>
        <h3>Welcome <?php echo $row['username'] ?>!</h3>
        

    </form>
</div>




</div>

    <script src="../home.js"></script>

  </main>
</body>

</html>


