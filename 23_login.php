<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- bootstrap css1 js1  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <style type="text/css">
        .btn {
            width: 200px;
        }
    </style>

<body></body>

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
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" />
                        </div>
                        <button type="submit" name="login" class="btn bg-dark text-white float-end">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
session_start();

if (isset($_POST['login'])) {
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if ($userEmail != "" && $userPassword != "") {
        if ($userEmail == $_SESSION['email'] && password_verify($userPassword, $_SESSION['password'])) {
            echo "Login Successful...";
        } else {
            echo "Login Failed...";
        }
    } else {
        echo "Need to fill.";
    }
}

?>

<!-- bootstrap css1 js1  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>