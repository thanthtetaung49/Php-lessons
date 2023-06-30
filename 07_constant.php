<!-- Syntax Syntax
define (name, value, case-insensitive) -->

<?php
        // name,    value
define("GREETING", "Welcome to channelmyanmar.com");
echo GREETING; // case-sensitive
echo "<br>";

// constant Arrays
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);

echo cars[0] ,"<br>";
echo cars[1] ,"<br>";
echo cars[2] ,"<br>";

// constants are global
define("myWebsiteName", "www.shop.com");

function mySite () {
    echo myWebsiteName;
}

mySite();
?>