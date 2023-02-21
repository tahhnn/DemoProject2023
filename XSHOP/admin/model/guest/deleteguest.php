<?php
    include '../connect.php';
    $sql = "DELETE * FROM guest WHERE id_guest = $id_guest";
    $statement = $connect->exec($sql);
    header('location:../../public/Admin/html/index.php?act=guest');

    ?>