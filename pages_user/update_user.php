<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pages_css/login.css"/>
    <title>Update</title>
</head>
<body>
<?php
require('connection.php');
$id = intval($_GET['id']);
$sql = "SELECT * FROM persons WHERE id=$id";
$result = mysqli_query($con, $sql);

if ($rows = mysqli_fetch_array($result)) {
    
    $id = $rows['id'];
    $username = $rows['username'];
    $email = $rows['email'];
    $password = $rows['password'];


} else {
    die("<script>window.location.href='homeadmin.php';</script>");
}
?>
<div>
    <h1>Update Page: </h1>
    <form method="post" action="update.php">
        <table>
            <tr><th width="200px">ID:</th>
                <td width="300px">
                    <input type="text" name="id" value="<?php echo $id;?>" readonly/>
                </td></tr>
            <tr><th width="200px">Username:</th>
                <td width="300px">
                    <input type="text" name="username" value="<?php echo $username;?>"
                           required="required"/>
                </td></tr>
            <tr><th width="200px">Email:</th>
                <td width="300px">
                    <input type="text" name="email" value="<?php echo $email;?>"
                           required="required"/>
                </td></tr>
                <tr><th width="200px">Password:</th>
                <td width="300px">
                    <input type="text" name="password" value="<?php echo $password;?>"
                           required="required"/>
                </td></tr>
            
            
            <tr><td colspan="2">
                    <br />
                    <input type="submit" value="Update"/>&nbsp;&nbsp;
                        <input type="submit"value="Back to Previous Page" formaction="homeadmin.php"/>
                </td></tr>
        </table>
    </form>
    </div>
</body>
</html>
