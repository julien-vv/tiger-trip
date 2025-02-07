<?php
require('connection.php');

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE `persons` SET username = '$username', email = '$email', password='$password' WHERE id=$id";
$res = mysqli_query($con, $sql);
if($res){
   echo "<div class='sucess'>
         <h3>You have successfully added a user</h3>
         <p>Click here to return to the <a href='homeadmin.php'>admin board</a></p>
   </div>";
}else{
    
   echo "<div class='sucess'>
   <h3>error while update user</h3>
   <p>Click here to return to the <a href='homeadmin.php'>admin board</a></p>
</div>";
}