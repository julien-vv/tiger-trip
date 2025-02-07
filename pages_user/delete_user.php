<?php
include "connection.php";
$id = intval($_GET['id']);

$sql = "DELETE FROM persons WHERE id=$id";
$result = mysqli_query($con, $sql);

if(mysqli_affected_rows($con)<=0)
{
    echo "<script>alert('Unable to delete data!');";
    die ("window.location.href='homeadmin.php';</script>");
}else{
    echo "<script>alert('Data deleted!');</script>";
    echo "<script>window.location.href='homeadmin.php';</script>";
}?>
