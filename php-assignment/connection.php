<?php

$hostname="localhost";
$username="root";
$password="Admin@1234";

global $connect;
$connect= new mysqli($hostname, $username, $password);

if($connect->connect_error){
    die("connection failed :" .$connect->connect_error);
}

// function get_category(){
//     global $connect;
//     $category_filter="SELECT * FROM product ORDER BY .category";
//     $result=mysqli_query($connect, $category_filter);
//     $data=mysqli_fetch_all($result);
//     return $data;
// }

?>