<?php

$cars = array("Valvo", "BMW", "Toyota");
echo "I like " . $cars[0] . " , " . $cars[1], " and " . $cars[2];
echo "<br>";

echo "Array count => " . count($cars) . "<br>";

echo "<h1>Indexed Array</h1>";

for ($x = 0; $x < count($cars); $x++) {
    echo "I like " . $cars[$x] . "<br>";
}

echo "<h1>Associated Array</h1>";

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

var_dump($age);
echo "<br>";
echo $age["Peter"] . "<br>";
echo $age["Ben"] . "<br>";
echo $age["Joe"] . "<br>";

foreach ($age as $key => $value) {
    echo "Name is $key and age is $value<br>";
}

echo "<h1>Multidimensional Array</h1>";

$students = array(
    array("maung maung", "22", "yangon"),
    array("aung aung", "23", "mandalay"),
    array("su su", "16", "bago"),
    array("hla hla", "19", "yangon")
);

var_dump($students);
echo "<br>";
echo $students[0][0] . " " . $students[0][1] . " " . $students[0][2] . "<br>";
echo $students[1][0] . " " . $students[1][1] . " " . $students[1][2] . "<br>";
echo $students[2][0] . " " . $students[2][1] . " " . $students[2][2] . "<br>";
echo $students[3][0] . " " . $students[3][1] . " " . $students[3][2] . "<br>";

for ($x = 0; $x < count($students); $x++) {
    echo "<ul>";
    for ($y = 0; $y < count($students[$x]); $y++) {
        echo "<li>";

        echo $students[$x][$y];

        echo "</li>";
    }
    echo "</ul>";
}

echo "<h1>Sorting Array</h1>";

$cars = array("Volvo", "BMW", "Toyota");
// sort($cars);
rsort($cars);

for ($x = 0; $x < count($cars); $x++) {
    echo $cars[$x] . "<br>";
}

$numbers = array(4, 6, 2, 22, 11);
// sort($numbers);
rsort($numbers);

for ($x = 0; $x < count($numbers); $x++) {
    echo $numbers[$x] . "<br>";
}

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
// asort($age);
// arsort($age);
// ksort($age);
krsort($age);

foreach ($age as $key => $value) {
    // echo $value."<br>";
    echo $key . "<br>";
}

?>
<!-- value           key -->
<!-- Sorting Array => sort() rsort() asort() arsort() ksort() krsort() -->