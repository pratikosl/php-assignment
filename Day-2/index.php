<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div class="container">
    <form action="insert.php" method="post">
        <input type="text" name="firstname" placeholder="First Name"><br><br>
        <input type="text" name="lastname" placeholder="Last name"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="number" name="phonenumber" placeholder="Phone Number" ><br><br>
        <input type="submit" name="Submit">
    </form>
    </div>
</body>
</html>

<?php
require "display.php";
?>