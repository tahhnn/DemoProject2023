<?php
    include 'connect.php';
    $sql_product = "SELECT products.id, products.name, products.img, products.disc, products.price, products.status, products.discount, products.view, products.id_type, type.name as type_name FROM products INNER JOIN type ON products.id_type = type.id";
    $statement_product= $connect->prepare($sql_product);
    $statement_product->execute();
    $data_product = $statement_product->fetchAll();
  
?>