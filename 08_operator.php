<!-- Arithmetic operators
assignment operators
comparison operators
increment/decrement operators
logical operators
string operators
array operators
conditional assignment operators -->

<?php

$numberOne = 10;
$numberTwo = 20;

function funOperators()
{
    // arithmetic operators (+, -, *, /, %)
    global $numberOne, $numberTwo;

    echo "Addition => ", ($numberOne + $numberTwo);
    echo "<br>";
    echo "Subtraction => ", ($numberOne - $numberTwo);
    echo "<br>";
    echo "Multiplication => ", ($numberOne * $numberTwo);
    echo "<br>";
    echo "Division => ", ($numberOne / $numberTwo);
    echo "<br>";
    echo "Modulus => ", ($numberOne % $numberTwo);
    echo "<br>";
    echo "Exponentiation => ", ($numberOne ** 2);

    // assignment operators (=, +=, -=, *=, /=, %=, )

    $numberOne = 20;
    echo "<br>";
    echo $numberOne;

    $numberOne += 10;
    echo "<br>";
    echo "plus equal => $numberOne"; // 30

    $numberOne -= 10;
    echo "<br>";
    echo "minus equal => $numberOne"; // 20

    $numberOne *= 2;
    echo "<br>";
    echo "multiply equal => $numberOne"; // 40

    $numberOne /= 2;
    echo "<br>";
    echo "divided equal => $numberOne"; // 20

    $numberOne %= 3;
    echo "<br>";
    echo "modulus equal => $numberOne"; // 2

    // Comparison Operators (==, ===, != (or) <>, !==, >, <, >=, <=, <=>

    $numThree = 3; // integer 
    $numFour = 4; // integer
    $strThree = "3"; // string
    $strFour = "4"; // string
    $numFive = 3;
    $numSix = 4;

    echo "<br>";
    var_dump($numThree == $numFour);

    echo "<br>";
    var_dump($numThree == $strThree); // true
    var_dump($numThree === $strThree); // false

    echo "<br>";
    var_dump($numThree != $numFour); // true
    var_dump($numThree != $strFour); // true
    var_dump($numThree !== $strThree); // true
    var_dump($numThree != $strThree); // false

    echo "<br>";
    var_dump($numFour > $numThree); // true
    var_dump($numThree > $numFour); // false
    var_dump($numThree >= $numFive); // true

    echo "<br>";
    var_dump($numThree < $numFour); // true
    var_dump($numFour < $numThree); // false
    var_dump($numFour <= $numSix); // true

}

funOperators();

// increment / decrement operators 

$x = 10;
++$x;
echo "<br>";
echo "pre increment value => ", $x;

$y = 10;
echo "<br>";
echo "post increment value => ", $y++; // 10
echo "<br>";
echo "post increment value => ", $y++; // 11

$z = 10;
echo "<br>";
echo "pre decrement value => ", --$z; // 9

$a = 10;
echo "<br>";
echo "post decrement value => ", $a--; // 10
echo "<br>";
echo "post decrement value => ", $a--; // 9

// Logical Operators(and &&, or || xor, !)
$numOne = 10;
$numTwo = 20;

if ($numOne === 10 && $numTwo === 20) {
    echo "<br>Hello World";
}

if ($numOne === "10" && $numTwo === 20) {
    echo "<br>Hello World";
} else {
    echo "<br>Hello Myanmar";
}

if ($numOne === "10" || $numTwo === 20) {
    echo "<br>Hello World two";
}

if ($numOne === 20 || $numTwo === 30) {
    echo "<br>Hello World two";
} else {
    echo "<br>Hello Myanmar two";
}

if ($numOne !== 30) {
    echo "<br>Hello World Three";
}

// String Operators (. , .=)
$txtOne = "Hello";
$txtTwo = " World!";
$txtThree = " PHP";

echo "<br>", $txtOne . $txtTwo;

$txtOne .= $txtThree;
echo "<br>", $txtOne;

// Array Operators (+, ==, ===, !=, !==)
$arrOne = array(
    "a" => "red",
    "b" => "green"
);

$arrTwo = array(
    "c" => "blue",
    "d" => "yellow"
);

echo "<br>";
var_dump($arrOne + $arrTwo);
echo "<br>";
var_dump($arrOne == $arrTwo); // false
echo "<br>";
var_dump($arrOne === $arrTwo); // false
echo "<br>";
var_dump($arrOne != $arrTwo); // true
echo "<br>";
var_dump($arrOne !== $arrTwo); // true

// conditional assignment operators 
$name = "Jhonn Snow";
echo "<br>";
echo $name === "Jhonn Snow" ? "Name is TRUE" : "Name is false";

echo "<br>";
echo $name = empty($user) ? "anonymous" : "logged in";

?>