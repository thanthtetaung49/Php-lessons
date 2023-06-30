<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Encrypt/ Decrypt</h1>

    <?php

    $name = "Hello World!";

    $encFirst = md5($name);
    $encSecond = sha1($name);
    $encThird = crypt($name, "papaya");

    echo "md5 encrypt => " . $encFirst . "<br>";
    echo "sha1 encrypt => " . $encSecond . "<br>";
    echo "crypt encrypt => " . $encThird . "<br>";

    ?>

    <hr />

    <h1>Password Hash</h1>

    <?php

    $password = "*hellohello12**";
    $hashPassword = password_hash($password, PASSWORD_BCRYPT);
    $hashSec = password_hash($password, PASSWORD_DEFAULT);

    echo "PASSWORD_BCRYPT hash => " . $hashPassword . "<br>";
    echo "PASSWORD_DEFAULT hash => " . $hashSec . "<br>";

    echo password_verify($password, $hashPassword) ? "password verify<br>" : "wrong password<br>";
    echo password_verify("*hellohello", $hashSec) ? "password verify<br>" : "wrong password<br>";

    ?>

</body>

</html>