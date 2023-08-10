<?php

$name = $_POST['username'];
//initiating curl to get data from api
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.openweathermap.org/data/2.5/weather?lat=23.259933&lon=77.412613&exclude=hourly,daily&appid=49c0bad2c7458f1c76bec9654081a661'
]);
$response = curl_exec($curl);
// echo $response;
// die();
$data = json_decode($response, true);
curl_close($curl);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Weather Forecast</title>
</head>

<body>
    <hr>
    <div class="container">
        <h2 align=center>Welcome<?php echo " " . $name . ", "; ?></h2>
        <h3 align=center>Your Current Weather Details are :</h3>
        <a class="link" href="logout.php">Logout</a>
        <div class="weather-container">
            <span class="weather-info">Weather: <?php echo $data['weather'][0]['main'] ?></span><br>
            <span class="weather-info">Temperature: <?php echo round($data['main']['temp'] - 273.15) ?>°</span><br>
            <span class="weather-info">Sunrise: <?php echo date('H:i', $data['sys']['sunrise']); ?> AM </span><br>
            <span class="weather-info">Sunset: <?php echo date('H:i', $data['sys']['sunset']) ?> PM</span><br>
            <span class="weather-info">Location: <?php echo $data['name'] ?></span>
        </div>

    </div>
    <hr>
</body>

</html>