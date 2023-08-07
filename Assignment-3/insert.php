<?php
require "connection.php";


$interest=$_POST["interest"];
$education=$_POST["education"];
$profession=$_POST["profession"];
$hobby=$_POST["hobby"];

$sql="INSERT INTO `profilecompletion`(`interest`,`education`,`profession`,`hobby`) VALUES('$interest','$education','$profession','$hobby')";
$result= mysqli_query($connect,$sql);


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM profilecompletion WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $profile = mysqli_fetch_assoc($result);
        $ProfileData = array($profile['interest'], $profile['education'], $profile['profession'], $profile['hobby']);
        $ProfilePercentage = calculate($ProfileData);
        if($ProfilePercentage>0){
            echo "your profile is " . $ProfilePercentage . "completed";
        }
    } else {
        header("Location: profile.php");
        exit();
    }
} else {
    header("Location: profile.php");
    exit();
}

function calculate($array)
{
    $total = 4; 
    $userFilled = count(array_filter($array));

    return ($userFilled / $total) * 100;
}

  mysqli_close($connect);

?>