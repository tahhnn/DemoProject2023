<?php
    session_start();
    include '../connect.php';
    $id_guest =$_POST['id_guest'];

    $comment =$_POST['comment'];
    $prd_id = $_POST['id_product'];
    $name = $_POST['name'];
    

    $sql = "INSERT INTO comments ( comment,id_product,id_guest) VALUES ('$comment','$prd_id','$id_guest')";
    $statement = $connect->prepare($sql);
    $statement->execute();
    header('location: ../../view/layout/html/demo-product.php?id_product='.$prd_id);
    ?>

