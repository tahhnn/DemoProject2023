<?php
     include 'connect.php';
     $id_prd = $_GET['id_product'];
     $get_products = "SELECT `prd_name` FROM products WHERE id_product = $id_prd";
     $statement_products= $connect->prepare($get_products);
     $statement_products->execute();
     $data_1products = $statement_products->fetch();
     $product_name = $data_1products['prd_name'];
    $sql_comment = "SELECT name, comment, prd_name FROM comments 
    INNER JOIN products INNER JOIN guest ON products.id_product = comments.id_product AND guest.id_guest = comments.id_guest 
    WHERE prd_name LIKE '%$product_name%' ORDER BY id_comment DESC LIMIT 0,5";

    
    $statement_cmt = $connect->prepare($sql_comment);
    $statement_cmt->execute();
    $comment = $statement_cmt->fetchAll();

?>
