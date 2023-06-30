<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>

<body>
    <h3>Login Form</h3>

    <form method="POST">
        <label for="email">Email</label>
        <input type="email" name="userEmail" id="email" />
        <br />
        <label for="pass">Password</label>
        <input type="password" name="userPassword" id="pass" />
        <br />
        <input type="submit" name="loginBtn" value="Log In" />
    </form>
    

    <?php

    $email = "admin@gmail.com";
    $defaultPass = "admin123";

    $hashPassword = password_hash($defaultPass, PASSWORD_BCRYPT);

    if (isset($_POST['loginBtn'])) {
        $userEmail = $_POST['userEmail'];
        $userPass = $_POST['userPassword'];

        if ($email == $userEmail  && $defaultPass == $userPass) {
            echo "Login Successful!";
        } else {
            echo "Login Fail! Try Again Later.";
        }
    }

    ?>

</body>

</html>