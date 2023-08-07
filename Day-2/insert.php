<?php
require "connection.php";
// require "validation.php";

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$phone=$_POST["phonenumber"];

$sql="INSERT INTO `4`(`firstname`,`lastname`,`email`,`phone`) VALUES('$firstname','$lastname','$email','$phone')";
$result= mysqli_query($connect,$sql);


if ($result) {
    echo "New record added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
  }
  
  mysqli_close($connect);

?>




