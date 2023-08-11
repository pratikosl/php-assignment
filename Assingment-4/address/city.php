<?php
require '../connection.php';
mysqli_select_db($connect,"address");
$sid =  $_POST['state_data'];

$city = "SELECT * FROM cities WHERE state_id = $sid";
$ciquery = mysqli_query($connect, $city);


$output = '<option value="">Select city</option>';
while ($city_row = mysqli_fetch_assoc($ciquery)) {
    $output .= '<option value="' . $city_row['id'] . '">' . $city_row['name'] . '</option>';
}

echo $output;
?>