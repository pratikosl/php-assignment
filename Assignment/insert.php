<?php
$hostname="localhost";
$username="root";
$password="Admin@1234";
$dbname="devlogin";

$connect= mysqli_connect($hostname, $username, $password, $dbname);

if(!$connect){
    die("Connection is failed due to " . mysqli_connect_error());
}
    echo "connection is successfully made";

 $email=$_POST['email'];
 $password=$_POST['password'];

 if(strlen($email)<6){
    header("Location: insert.php?error=Enter Correct Email");
    exit();
 }
else if(empty($password)){
    header("Location: insert.php?error=Enter Correct Password");
    exit();
}
else{
$sql = "select *from login where email = '$email' and password = '$password'";  
$result = mysqli_query($connect, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
  
if($count == 1){  
    echo "Logged in!";
                session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
}  
else{
    header("Location: index.php?error=Incorrect-Credential");
}

}