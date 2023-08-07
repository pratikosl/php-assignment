<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $cookie_value=$name;
  setcookie("username", $cookie_value, time() + 15, "", "localhost");
  if(isset($_COOKIE['username'])){
    echo "Thanks for subscribing, " . strtoupper($_COOKIE['username']) . ".";
    setcookie("username", "", time() - 5, "", "localhost");
    header("refresh: 10;URL=login.php");
  }

  else{
    echo "Incorrect Details Filled";
  }
}


?>