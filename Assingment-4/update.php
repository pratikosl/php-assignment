<?php

require "connection.php";
mysqli_select_db($connect,"devlogin");

session_start();
$country=$_SESSION['country'];
$state=$_SESSION['state'];
$city=$_SESSION['city'];

$update= "UPDATE `profile` SET country='$country',state='$state',city='$city' WHERE id= {$_SESSION['id']} ;";
$updateaddress=mysqli_query($connect,$update);

header("Location:profile.php");
?>  