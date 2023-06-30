<?php

echo "<h1>Session Storage</h1>";

session_start();

$_SESSION['name'] = "session maung maung";

$name = "maung maung";
echo $name;

echo "Session Successful";

echo "<h1>Cookie Storage</h1>";

setcookie("phoneNumber", "09789949633", time() + (60 * 60 * 24 * 365 * 10));

echo "Cookie storage successful";

?>