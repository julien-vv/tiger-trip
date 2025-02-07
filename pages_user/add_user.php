<?php
require('connection.php');
if (isset($_POST['username'], $_POST['email'], $_POST['password'],  $_POST['type'])){

  $username = stripslashes($_POST['username']);
  $username = mysqli_real_escape_string($con, $username); 

  $email = stripslashes($_POST['email']);
  $email = mysqli_real_escape_string($con, $email);

  $password = stripslashes($_POST['password']);
  $password = mysqli_real_escape_string($con, $password);
  
  $query = "INSERT into `persons` (username, email, type, password)
        VALUES ('$username', '$email', '$type', '$password')";
  $res = mysqli_query($con, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>You have successfully added a user</h3>
             <p>Click here to return to the <a href='homeadmin.php'>admin board</a></p>
       </div>";
    }
}else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../pages_css/login.css" />
    <title>Tiger Trip Home</title>
    
    <!-- Bootstrap core CSS -->
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
            <li><a class="nav-link scrollto" href="homeadmin.php">Admin</a></li>
          </ul>
          <img id="logo" src="../images_home/logoTiger.png" alt="Tiger Logo">
        </nav>
      </header>

<main>
<div class="flexbox">
    <form class="box" action="" method="post">

        <h1 class="box-title">Add User</h1>
        <br>
        <input type="text" class="box-input" name="username" 
        placeholder="Username" required />

        <br> <br>
        <input type="text" class="box-input" name="email" 
        placeholder="Email" required />
        <br><br>

        <input type="password" class="box-input" name="password" 
        placeholder="Password" required />
        <br><br>

        <select id="type" name="type" placeholder="Type">
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="+Add" class="box-button" />
        <br><br>
    </form>
</div>


</div>

    <script src="../home.js"></script>

  </main>
</body>

</html>

<?php } ?>
