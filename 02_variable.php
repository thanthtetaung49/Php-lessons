<?php

$greeting = "Hello world!";
$x = 10;
$y = 20;

echo $greeting." hello php.";
echo "<br>";
var_dump($greeting);

echo $x + $y;

function myTest () {
    $x = 5;
    echo "<p>variable x inside function => $x</p>";
}

myTest();

echo "<p>variable x inside function => $x</p>";

function testingTwo () {
    global $x, $y;
    echo "<p>variable x and y inside function => $x and $y</p>";
}

testingTwo();

function testingThree () {
    $GLOBALS['x'];
    $GLOBALS['y'];
}

testingThree();
echo "variable x and y inside function => $x and $y";

function testFour () {
    static $x = 0;
    echo $x;
    $x++;
}

echo "<br>";

testFour();
testFour();
testFour();
testFour();

function myFunc () {
    $x = 0;
    $x++;
    echo $x;
}

echo "<br>";

myFunc();
myFunc();
myFunc();

?>
