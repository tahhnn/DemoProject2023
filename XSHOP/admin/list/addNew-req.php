<?php
include '../model/connect.php';
    $name = $_POST['name'];
    $sql = "INSERT INTO `type` (name) VALUE ('$name')";
    $statement = $connect->prepare($sql);
    $statement->execute();
header('location: ../index.php?act=list')
?>