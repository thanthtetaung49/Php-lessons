<?php

echo "<h1>While Loop</h1>";

$x = 1;

while ($x < 5) {
    echo "The number is  $x <br>";
    $x++;
}

echo "<hr/>";

$y = 1;
while ($y <= 5) {
    $y++;
    echo "The number is $y <br>";
}

echo "<hr/>";

$z = 0;
while ($z <= 100) {
    echo "The number is $z <br>";
    $z += 10;
}

echo "<hr/>";

echo "<h1>For loop</h1>";

for ($x = 0; $x <= 10; $x++) {
    echo "For loop number => $x <br>";
}

echo "<hr/>";

for ($x = 0; $x <= 200; $x += 10) {
    echo "For loop number => $x <br>";
}

echo "<hr/>";

echo "<h1>For each loop</h1>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "For each loop => $value <br>";
}

echo "<hr/>";

$student = array(
    "Peter" => "35",
    "Ben" => "37",
    "Joe" => "43"
);

foreach ($student as $key => $value) {
    echo "Students name is $key and age is $value <br>";
}

echo "<hr/>";

echo "<h1>Break</h1>";

for ($x = 0; $x <= 10; $x++) {
    if ($x === 4) {
        echo "<b>Number is $x</b> <br>";
        break;
    }

    echo "loop number => $x <br>";
}

echo "<hr/>";

echo "<h1>Continue</h1>";

for ($x = 0; $x <= 10; $x++) {
    if ($x === 4) {
        echo "<b>Number is $x</b> <br>";
        continue;
    }

    echo "loop number => $x <br>";
}

?>