<?php

$intOne = 5985;
var_dump($intOne); // int(5985)
echo "<br>";
var_dump(is_int($intOne)); // bool(true)
echo "<br>";

$floatNumber = 59.85;
var_dump($floatNumber); // float(59.85)
echo "<br>";
var_dump(is_int($floatNumber)); // bool(false)
echo "<br>";
var_dump("Float Number => ", is_float($floatNumber));
echo "<br>";

$infinityNumber = 1.9e411;
var_dump("Infinity Number => ", $infinityNumber);
echo "<br>";

$notNumber = acos(8);
var_dump($notNumber);

$numOne = 5985;
var_dump(is_numeric($numOne)); // true

$numTwo = "5985";
var_dump(is_numeric($numTwo)); // true

$numThree = "59.85" + 100;
var_dump(is_numeric($numThree)); // true

$numFour = "Hello";
var_dump(is_numeric($numFour)); // false

// casting string and float to integer
$firstNumber = 234.44;
$castInt = (int) $firstNumber;
echo "<br>";
echo "Casting float to integer => ", $castInt;

$secNumber = "2345.445";
$castIntTwo = (int) $secNumber;
echo "<br>";
echo "Casting string to integer => ", $castIntTwo;

?>