<?php
    include 'connect.php';
    $sql_type = "SELECT * FROM `type`";
    $statement_type = $connect->prepare($sql_type);
    $statement_type->execute();
    $data = $statement_type->fetchAll();
?>