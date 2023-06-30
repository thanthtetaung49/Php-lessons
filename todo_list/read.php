<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
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

    <h1>Tasks List</h1>

    <a href="./create.php" class="create-btn">Go to create page</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <td>1</td>
                <td>CODE LAB</td>
                <td>1.1.2022</td>
                <td>
                    <a href="">Update</a>
                    <a href="">Delete</a>
                </td>
            </tr> -->

            <?php

            date_default_timezone_set('Asia/Yangon');

            include_once("./dbconnect.php");

            $sql = "SELECT * FROM work";
            $query = mysqli_query($connection, $sql);

            $totalRow = mysqli_num_rows($query);
            // $row = mysqli_fetch_assoc($query);
            // echo "<pre/>";
            // var_dump($row);

            while ($row = mysqli_fetch_assoc($query)) {

                $currentTime = date('d-M-Y g:i A', strtotime($row['created_at']));

                echo "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['work_name']}</td>
                <td>$currentTime</td>
                <td>
                    <a href='./update.php?id={$row['id']}'>Update</a>
                    <a href='./delete.php?id={$row['id']}'>Delete</a>
                </td>
            </tr>
                ";
            }
            ?>


        </tbody>
    </table>

</body>

</html>