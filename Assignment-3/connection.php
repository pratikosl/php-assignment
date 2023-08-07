<?php

$hostname="localhost";
$username="root";
$password="Admin@1234";
$dbname="devlogin";

$connect= mysqli_connect($hostname, $username, $password, $dbname);

if(!$connect){
    die("Connection is failed due to " . mysqli_connect_error());
}
?>