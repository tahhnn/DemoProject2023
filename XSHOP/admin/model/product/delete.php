<?php
    include '../connect.php';
    $id_delete = $_GET['id_product'];
    $sql_delete = "DELETE FROM `products` WHERE `id_product` = '$id_delete'";
    $statement = $connect->exec($sql_delete);
    header('location: ../../public/Admin/html/index.php?act=product');

?>