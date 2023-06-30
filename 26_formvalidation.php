<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>

    <?php
    $errorName = $errorEmail = $errorPhone = $errorAddress = "";
    $name = $email = $phone = $address = "";

    if (isset($_POST['btnSave'])) {
        if ($_POST['name'] == null || $_POST['name'] == "" || empty($_POST['name'])) {
            $errorName = "Please fill your name.";
        } else {
            $name = $_POST['name'];
        }

        if ($_POST['email'] == null || $_POST['email'] == "" || empty($_POST['email'])) {
            $errorEmail = "Please fill your email.";
        } else {
            $email = $_POST['email'];
        }

        if ($_POST['phone'] == null || $_POST['phone'] == "" || empty($_POST['phone'])) {
            $errorPhone = "Please fill your phone.";
        } else {
            $phone = $_POST['phone'];
        }

        if ($_POST['address'] == null || $_POST['address'] == "" || empty($_POST['address'])) {
            $errorAddress = "Please fill your address.";
        } else {
            $address = $_POST['address'];
        }

        if ($_POST['name'] != "" && $_POST['email'] != "" && $_POST['phone'] != "" && $_POST['address'] != "") {
            echo "<b>$name</b>" . "<br/>";
            echo "<b>$email</b>" . "<br/>";
            echo "<b>$phone</b>" . "<br/>";
            echo "<b>$address</b>" . "<br/>";
        }
    }
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3 shadow">
                <form action="" method="post">
                    <div class="my-3 px-5">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" />
                        <small class="text-danger">
                            <?php
                            echo $errorName;
                            ?>
                        </small>
                    </div>
                    <div class="my-3 px-5">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Eg: example@gmail.com" />
                        <small class="text-danger">
                            <?php
                            echo $errorEmail;
                            ?>
                        </small>
                    </div>
                    <div class="my-3 px-5">
                        <label for="">Phone</label>
                        <input type="number" name="phone" class="form-control" placeholder="Eg: 09....." />
                        <small class="text-danger">
                            <?php
                            echo $errorPhone;
                            ?>
                        </small>
                    </div>
                    <div class="my-3 px-5">
                        <label for="">Address</label>
                        <textarea name="address" id="address" class="form-control" cols="30" rows="10"
                            placeholder="Enter Address"></textarea>
                        <small class="text-danger">
                            <?php
                            echo $errorAddress;
                            ?>
                        </small>
                    </div>
                    <div class="my-3 px-5 float-end">
                        <input type="submit" name="btnSave" class="btn bg-dark text-white" value="Save" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>