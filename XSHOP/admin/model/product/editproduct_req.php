<?php
    include '../connect.php';
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    
    $img = isset($_POST['$img']) ? $_POST['$img'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $disc = isset($_POST['disc']) ? $_POST['disc'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $view = isset($_POST['view']) ? $_POST['view'] : '';
    $discount = isset($_POST['discount']) ? $_POST['discount'] : '';
    $id_type = isset($_POST['id_type']) ? $_POST['id_type'] : '';
    $sql_update = "UPDATE `products` SET `name` = '$name',`img` = '$img',`price` = '$price',`disc` = '$disc',`status` = '$status',`view` = '$view' ,`id_type` = '$id_type' WHERE `id`='$id'";
   
    
        $statement_update = $connect->prepare($sql_update);
        $statement_update->execute();
        
    header('location:../../index.php?act=product');
    
    
    ?>