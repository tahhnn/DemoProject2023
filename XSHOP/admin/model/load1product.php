<?php
    include 'connect.php';
    $id = $_GET['id_product'];
    $sql_product = "SELECT * FROM products WHERE id_product = $id";
    $statement_product= $connect->prepare($sql_product);
    $statement_product->execute();
    $data_1product = $statement_product->fetch();
  
?>