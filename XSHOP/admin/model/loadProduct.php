<?php
    include 'connect.php';
    $sql_product = "SELECT * FROM products ORDER BY id DESC";
    $statement_product= $connect->prepare($sql_product);
    $statement_product->execute();
    $data_product = $statement_product->fetchAll();
?>