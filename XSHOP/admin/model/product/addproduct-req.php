<?php 
    $sql_add="INSERT INTO products (`name`, `img`, `price`, `disc`, `status`, `discount`, `view`, `id_type`) VALUES ('$name','$img',$price,'$disc','$status',$discount,$view,$id_type)";
    $statement = $connect->prepare($sql_add);
    $statement->execute();
    move_uploaded_file($img_tmp,'../../public/Admin/image/'.$img);
    header('location: ../../index.php?act=product');
    ?>