<?php
    include '../connect.php';
    $id_delete = $_GET['id'];
    $sql_delete = "DELETE FROM `products` WHERE `id` = '$id_delete'";
    $statement = $connect->exec($sql_delete);
    header('location: ../../public/Admin/html/index.php?act=product');

?>