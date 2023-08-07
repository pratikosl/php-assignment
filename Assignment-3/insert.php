<?php

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    echo "you need to post on this page";
    exit();
}

require "connection.php";

$fields = ["interest","education", "profession", "hobby"];

$profile_string = "";
$cnt = 0;
foreach($fields as $field)
{
    if($_POST[$field] and $_POST[$field] != "") $cnt+=1;
    $profile_string = $profile_string . "&" . $_POST[$field];
}

$profile_string = ltrim($profile_string, "&");
$profile_completion = fdiv($cnt, 4);
session_start();
$_SESSION["profile_completion"] = $profile_completion;
$sql = "update profile set profile=\"" . $profile_string . "\" where id=" . $_SESSION["id"] . ";";
$result = mysqli_query($connect, $sql);

header("Location: profile.php");

?>