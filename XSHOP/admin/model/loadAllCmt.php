<?php
    include 'connect.php';
    $sql_comment = "SELECT name, comment, prd_name, id_comment FROM comments 
    INNER JOIN products INNER JOIN guest ON products.id_product = comments.id_product AND guest.id_guest = comments.id_guest";
    $statement_comment = $connect->prepare($sql_comment);
    $statement_comment->execute();
    $cmtAll = $statement_comment->fetchAll(PDO::FETCH_ASSOC);
?>