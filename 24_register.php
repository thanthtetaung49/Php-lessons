<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- bootstrap css1 js1  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <style type="text/css">
        .btn {
            width: 200px;
        }
    </style>

<body>

    <div class="container">
        <div class="row mt-3">
            <div class="col-3">
                <div class="text-center">
                    <a href="./23_login.php">
                        <button class="btn bg-primary text-white mb-3">Login</button>
                    </a>
                </div>
                <div class="text-center">
                    <a href="./24_register.php">
                        <button class="btn bg-success text-white mb-3">Register</button>
                    </a>
                </div>
                <div class="text-center">
                    <a href="./25_logout.php">
                        <button class="btn bg-danger text-white mb-3">Logout</button>
                    </a>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirmPassword" class="form-control" />
                            </div>
                            <button type="submit" name="register"
                                class="btn bg-dark text-white float-end">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    session_start();

    function checkStrongPassword($checkPass)
    {
        $upperStatus = false;
        $lowerStatus = false;
        $numberStatus = false;
        $specialStatus = false;

        if (preg_match('/[A-Z]/', $checkPass)) {
            $upperStatus = true;
        }

        if (preg_match('/[a-z]/', $checkPass)) {
            $lowerStatus = true;
        }

        if (preg_match('/[0-9]/', $checkPass)) {
            $numberStatus = true;
        }

        if (preg_match('/[$#!^@*]/', $checkPass)) {
            $specialStatus = true;
        }

        if ($upperStatus && $lowerStatus && $numberStatus && $specialStatus) {
            return true;
        } else {
            return false;
        }
    }

    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if ($name != "" && $email != "" && $password != "" && $confirmPassword != "") {
            if (strlen($password) >= 6 && strlen($confirmPassword) >= 6) {
                if ($password == $confirmPassword) {

                    $status = checkStrongPassword($password);

                    if ($status) {
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);

                        echo "Register successful!";
                    } else {
                        echo "Password isn't strong. (eg. contain A-Z, a-z, 0-9, $#!^@)";
                    }

                } else {
                    echo "Password is not match!";
                }
            } else {
                echo "Password is too weak.";
            }
        } else {
            echo "Need to fill the register form!";
        }
    }
    ?>

    <!-- bootstrap css1 js1  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>