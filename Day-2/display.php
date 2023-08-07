<?php
require "connection.php";

$display = "SELECT * FROM `4`";
$tabledisplay=mysqli_query($connect,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
echo "<table>
<thead>
    <th>
        First Name
    </th>
    <th>
        Last Name
    </th>
    <th>
        Email
    </th>
    <th>
        Phone Number
    </th>
</thead>
<tbody>";

while($row=mysqli_fetch_assoc($tabledisplay)){
    echo  "<tr>
    <td>
        . $row['firstname']
    </td>
    <td>
        . $row['lastname']
    </td>
    <td>
        . $row['email']
    </td>
    <td>
        . $row['phone']
    </td>
</tr>
</tbody>
</table>;
}
</body>
</html>