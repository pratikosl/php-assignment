<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
    echo "you need to post on this page";
    exit();
}
session_start();
require 'connection.php';
mysqli_select_db($connect,"address");


$_SESSION['country']=$_POST['country'];
$_SESSION['state']=$_POST['state'];
$_SESSION['city']=$_POST['city'];


$sql1 = "select * from country where id=" . $_SESSION['country'] . ";";  
$country_q = mysqli_query($connect, $sql1);  
$row1 = mysqli_fetch_assoc($country_q);

$sql2 = "select * from states where id=" . $_SESSION['state'] . ";";  
$state_q = mysqli_query($connect, $sql2);  
$row2 = mysqli_fetch_assoc($state_q);

$sql3 = "select * from cities where id=" . $_SESSION['city'] . ";";  
$city_q = mysqli_query($connect, $sql3);  
$row3 = mysqli_fetch_assoc($city_q);

$_SESSION['country']=$row1['name'];
$_SESSION['state']=$row2['name'];
$_SESSION['city']=$row3['name'];

header("Location:update.php ");
?>