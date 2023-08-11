<?php

$hostname="localhost";
$username="root";
$password="Admin@1234";

$connect= new mysqli($hostname, $username, $password);

if(!$connect){
    die("Connection is failed due to " . mysqli_connect_error());
}
?>