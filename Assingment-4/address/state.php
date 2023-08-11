<?php
require "../connection.php";
mysqli_select_db($connect,"address");
$coun_id =   $_POST['country_data'];

$state = "SELECT * FROM states WHERE country_id = $coun_id";

$state_qry = mysqli_query($connect, $state);
// $output="";
$output = '<option value="">Select State</option>';
while ($state_row = mysqli_fetch_assoc($state_qry)) {
    $output .= '<option value="' . $state_row['id'] . '">' . $state_row['name'] . '</option>';
}
echo $output;
?>  