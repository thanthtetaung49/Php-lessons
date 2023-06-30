<?php

echo "<h1>Session Storage</h1>";

session_start();
// session_destroy();

echo $_SESSION['name'];

// echo $name;

echo "<h1>Cookie Storage</h1>";

echo $_COOKIE['phoneNumber'];

?>