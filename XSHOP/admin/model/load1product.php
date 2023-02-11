<?php
    include 'connect.php';
    $id = $_GET['id'];
    $sql_product = "SELECT * FROM products WHERE id = $id";
    $statement_product= $connect->prepare($sql_product);
    $statement_product->execute();
    $data_product = $statement_product->fetch();
  
?>