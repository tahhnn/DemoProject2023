<?php
    include '../connect.php';
    $comment =$_POST['content'];
    $prd_id = $_POST['id_product'];
    $sql = "INSERT INTO comments (id_comment, comment,id_product,id_guest) VALUES (NULL, '$comment','$prd_id','1')";
    $statement = $connect->exec($sql);
    echo ".$comment.";
    ?>

