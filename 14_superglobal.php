<?php

$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z."<br>";

echo $_SERVER['PHP_SELF']."<br>"; // /php lessons/14_superglobal.php

echo $_SERVER['SERVER_NAME']."<br>"; // localhost

echo $_SERVER['HTTP_HOST'] . "<br>"; // localhost

echo $_SERVER['HTTP_REFERER'] . "<br>"; // http://localhost/php%20lessons/

echo $_SERVER['HTTP_USER_AGENT']."<br>"; // Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36

echo $_SERVER['SCRIPT_NAME']; // /php lessons/14_superglobal.php

?>