<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    require 'connection.php';

    $email=$_POST['email'];
    $password=$_POST['password'];
    
    
    $sql = "select *from profile where email = '$email' and password = '$password'";  
    $result = mysqli_query($connect, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
     
    if($count > 0){  
       echo "Logged in!";
                   session_start();
                   $_SESSION['email'] = $row['email'];
                   $_SESSION['password'] = $row['password'];
                   $_SESSION['id'] = $row['id'];
                   header("Location: login.php");
    }  
    exit();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="index.php" method="post">
            <input type="email" name="email" placeholder="Enter Email">
            <input type="password" name="password" placeholder="Enter Password">
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>


<?php



?>