<?php
session_start();
$user=$_SESSION['email'];
echo "Welcome " . $user . ", you are logged in";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form action="index.php">
    <button type="submit">Log Out</button>
    </form>
</body>
</html>