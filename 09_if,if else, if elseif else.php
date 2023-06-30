<?php

$t = date("h");

if ($t < "20") {
    echo "Have a good day";
}

echo "<br>";

if ($t < "20") {
    echo "Have a good day";
} else {
    echo "Have a good night";
}

echo "<br>";

if ($t < "10") {
    echo "Have a good morning";
} elseif ($t < "20") {
    echo "Have a good day";
} else {
    echo "Have a good night";
}


?>