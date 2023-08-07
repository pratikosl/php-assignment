<?php

    require("connection.php");
    session_start();
    $sql = "select profile from profile where id=" . $_SESSION["id"] . ";";  
    $result = mysqli_query($connect, $sql);  
    $row = mysqli_fetch_assoc($result);
    $data = $row["profile"];
    $fields = explode("&", $data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Completion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        Percentage of profile completion : <?php echo $_SESSION["profile_completion"]*100 ."%" ?>
    </div>
    <div class="container">
        <form action="insert.php" method="post">
            <input type="text" name="interest" placeholder="Interest" value=<?php echo $fields[0] ?>>
            <br><br>
            <input type="text" name="education" placeholder="Education" value=<?php echo $fields[1] ?>>
            <br><br>
            <input type="text" name="profession" placeholder="Profession" value=<?php echo $fields[2] ?>>
            <br><br>
            <input type="text" name="hobby" placeholder="Hobbies" value=<?php echo $fields[3] ?>>
            <br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>