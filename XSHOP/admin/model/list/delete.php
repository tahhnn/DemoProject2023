<?php
    include '../connect.php';
    $id_delete = $_GET['id'];
    $sql = "DELETE FROM `type` WHERE `id` = '$id_delete'";
    $statement = $connect->exec($sql);
    header('location: ../../public/Admin/html/index.php?act=listproduct');
?>