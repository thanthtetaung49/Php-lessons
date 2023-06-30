<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>

<style type="text/css">

    .read-btn {
        color: #fff;
        padding: 5px 10px;
        margin-bottom: 1rem;
        background-color: steelblue;
        text-decoration: none;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        display: inline-block;
    }

</style>

<body>

    <h1>Todo List</h1>

    <a href="./read.php" class="read-btn">Go to read page</a>

    <form action="" method="post">
        <label for="name">Your tasks</label>
        <input type="text" name="taskName" id="name" placeholder="Enter your tasks..." />
        <button type="submit" name="addBtn">Add</button>
    </form>

    <?php

    include("./dbconnect.php");

    if (isset($_POST['addBtn'])) {

        $tasksName = $_POST['taskName'];

        $insertData = "
            INSERT INTO work (work_name) VALUES ('$tasksName')
        ";

        if ($tasksName == null || $tasksName == "") {
            echo "<small style='color: red;'>Tasks required!!!</small>";
        } else {
            if (mysqli_query($connection, $insertData)) {
                header("location:./read.php");
            } else {
                echo "Insert Failed...";
            }
        }
    }

    ?>

</body>

</html>