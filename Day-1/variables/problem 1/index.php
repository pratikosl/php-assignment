// Problem 1: Create two variables, $x and $y, and swap their values without using a third variable.

<?php
$x = 5;
$y = 10;
//changing the value of $x
$x = $x + $y;
//swapping value of $y
$y = $x - $y;
//swaping value of $x
$x = $x - $y;
//printing 
echo $x . $y;
?>