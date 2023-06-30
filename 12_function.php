<?php declare(strict_types=1);

function writeMsg() {
    echo "Hello World!";
}

writeMsg();

echo "<br>";
echo "<br>";

function familyName($fname) {
    echo "$fname is my family-member.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

echo "<br>";

function studentName($sname, $syear) {
    echo "$sname born in $syear.<br>";
}

studentName("Hege", "1975");
studentName("Stale", "1978");

echo "<br>";

function setHeight(int $minheight = 50) {
    echo "The height is $minheight <br>";
}

setHeight(350);
setHeight(400);
setHeight(600);
setHeight(); // default value 50
setHeight(700);

echo "<br>";

function sum (int $num1, int $num2) {
    return $num1 + $num2;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";

function minusNumbers(float $num3, float $num4) {
    return $num3 - $num4;
}

echo minusNumbers(10.5, 5.24). "<br>";

function multiplyNumbers(float $num5, float $num6) {
    return (int) ($num5 * $num6);
}

echo multiplyNumbers(2.45, 1.125). "<br>";

$num = 10;

function addTen($value) {
    echo $value += 5;
}

addTen($num);



?>