<?php
    include '../connect.php';
    $id_delete = $_GET['id_type'];
    $sql = "DELETE FROM `type` WHERE `id_type` = '$id_delete'";
    $statement = $connect->exec($sql);
    header('location: ../../public/Admin/html/index.php?act=listproduct');
?>