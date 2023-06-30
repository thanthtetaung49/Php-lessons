<!-- Data Type => string, integer, float, boolean, array, object, null, resource -->

<?php

$x = "Hello World";
$y = "Hello World";

echo $x;
echo "<br>";
echo $y;

$x = 5985;
echo "<br>";
var_dump($x);

$x = 10.365;
var_dump($x);

$x = true;
$y = false;
echo "<br>";
var_dump($x, $y);

$cars = array("Volvo", "BMW", "Toyota");
echo "<br>";
var_dump($cars);

$z = null;
echo "<br>";
var_dump($z);

?>