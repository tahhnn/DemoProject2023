<?php
    include '../connect.php';
    $id_delete = $_GET['id'];
    $sql_delete = "DELETE FROM `products` WHERE `id` = '$id_delete'";
    $statement = $connect->exec($sql_delete);
    header('location: ../index.php?act=product');

?>