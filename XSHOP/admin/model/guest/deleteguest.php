<?php
    include '../connect.php';
    $id_guest = $_GET['id_guest'];
    $sql = "DELETE FROM guest WHERE id_guest = $id_guest";
    $statement = $connect->exec($sql);
    header('location:../../public/Admin/html/index.php?act=guest');
    
    ?>