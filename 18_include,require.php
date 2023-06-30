<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- error   =>  include show error, work other function
                require show error, don't work other function -->

    <h1>Include / Require</h1>

    <?php

    include("./folder/home.php");
    include("./folder/about.php");
    include("./folder/contact.php");

    echo "<hr/>";

    require("./folder/home.php");
    require("./folder/contact.php");
    require("./folder/about.php");

    ?>

    <hr/>

    <h1>Include Once / Require Once</h1>

    <?php

    include_once("./folder/home.php");
    include_once("./folder/home.php");

    echo "<hr/>";

    require_once("./folder/contact.php");
    require_once("./folder/contact.php");

    ?>


</body>

</html>