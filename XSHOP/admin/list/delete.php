<?php
    include '../model/connect.php';
    $id_delete = $_GET['id'];
    $sql = "DELETE FROM `type` WHERE `id` = '$id_delete'";
    $statement = $connect->exec($sql);
    header('location: ../index.php?act=list');
?>