<?php
require_once ["connection.php"];

if($_SERVER["REQUEST_TYPE"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    
    $sql = "select *from login where email = '$email' and password = '$password'";  
    $result = mysqli_query($connect, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 
    if($count==1) {
        echo "Welcome " . $name . ", Thanks for Log In";
        exit();
    }
    else{
        echo "You have not subscribed to the news letter";
        header("Location:index.php");
    }
     
}


?>