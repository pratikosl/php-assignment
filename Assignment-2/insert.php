<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $cookie_value = $name;
  setcookie("username", $cookie_value, time() + 120, "", "localhost");
  $_COOKIE['username'] = $name;
  if (isset($_COOKIE['username'])) {
    echo "Thanks for subscribing, " . strtoupper($_COOKIE['username']) . ".";
    setcookie("username", "", time() - 120, "", "localhost");
    header("refresh: 120;URL=login.php");
  } else {
    echo "Incorrect Details Filled";
  }
}
