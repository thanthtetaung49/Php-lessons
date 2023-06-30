<?php

include("./dbconnect.php");

$id = $_GET['id'];

$getData = "SELECT * FROM work WHERE id=$id";

$query = mysqli_query($connection, $getData);

$data = mysqli_fetch_assoc($query); // get Data

// edit data 
if (isset($_POST['btnUpdate'])) {
    $updateTasksName = $_POST['taskName'];
    $updateId = $data['id'];
    $dataUpdate = "UPDATE work SET work_name='$updateTasksName' WHERE id=$updateId";

    $queryUpdate = mysqli_query($connection, $dataUpdate); // update data

    if ($queryUpdate) {
        header("location:./read.php");
    } else {
        echo "Update failed...";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<style type="text/css">
    .create-btn {
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

    <a href="./create.php" class="create-btn">Go to create page</a>

    <!-- show data  -->
    <form action="" method="post">
        <label for="taskName">Tasks</label>

        <input type="hidden" name="updateId" id="updateId" value="<?php echo $data['id']; ?>" />
        <input type="text" name="taskName" id="taskName" value="<?php echo $data['work_name']; ?>" required />
        <input type="submit" name="btnUpdate" value="Update" />
    </form>

</body>

</html>