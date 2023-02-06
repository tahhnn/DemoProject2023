
<?php
    include '../connect.php';
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $sql_update = "UPDATE `type` SET `name` = '$name' WHERE `id`='$id'";
   
    
        $statement_update = $connect->prepare($sql_update);
        $statement_update->execute();
        
    header('location:../../index.php?act=list');
    
    
    ?>