<?php

include("./dbconnect.php");

$id = $_GET['id'];

$DeleteSql = "DELETE FROM work WHERE id=$id";

mysqli_query($connection, $DeleteSql);

if (mysqli_query($connection, $DeleteSql)) {
    header("location:read.php");
}

?>