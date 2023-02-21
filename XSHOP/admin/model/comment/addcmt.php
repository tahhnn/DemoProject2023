<?php
    session_start();
    include '../connect.php';
    $comment =$_POST['comment'];
    $prd_id = $_POST['id_product'];
    $name = $_POST['name'];
    $sql_id_guest = "SELECT * FROM guest WHERE `name` LIKE '$name'" ;
    $statement_id_guest = $connect->prepare($sql_id_guest);
    $statement_id_guest->execute();
    $id_guest = $statement_id_guest->fetch();
    echo($id_guest['name']);


    $sql = "INSERT INTO comments (id_comment, comment,id_product,id_guest) VALUES (NULL, '$comment','$prd_id','$id_guest')";
    $statement = $connect->prepare($sql);
    $statement->execute();
    header('location')
    ?>

