<?php
    include '../connect.php';
    $id_comment = $_GET['id_comment'];
    $delete_cmt = "DELETE FROM `comments` WHERE `id_comment` = $id_comment";
    $statement_allcmt = $connect->exec($delete_cmt);
?>
