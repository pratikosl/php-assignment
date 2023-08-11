 <?php
require 'connection.php';

mysqli_select_db($connect,"address");
$country = "SELECT * FROM country";
$query = mysqli_query($connect, $country);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1 align="center">You have sucessfully logged in</h1>
    <div class="link">
    <a href="profile.php">Profile</a>
    <br><br>
    <a href="logout.php">Log Out</a>
    </div>
    <h2 align=center>Update Address</h2>
    <form class="form-login" action="select.php" method="post">
        <select name="country" id="country">
        <option selected disabled>Select Country</option>
                <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                
                <?php endwhile;?>
        </select><br><br>


        <select id="state" name="state">
            <option selected disabled>Select State</option>
        </select>


        <select id="city" name="city">
            <option selected disabled>Select City</option>
        </select><br><br>


        <button type="submit">Submit</button>
</form>
</div>

<script>
        $('#country').on('change', function() {
        var coun_id = this.value;
        $.ajax({
            url: 'address/state.php',
            type: "POST",
            data: {
                country_data: coun_id
            },
            success: function(result) {
                $('#state').html(result);
            }
        })
    });

    $('#state').on('change', function() {
        var sta_id = this.value;        
        $.ajax({
            url: 'address/city.php',
            type: "POST",
            data: {
                state_data: sta_id
            },
            success: function(data) {
                $('#city').html(data);
            }
        })
    });
</script>


</body>
</html>