<?php
    include '../connect.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM `products` WHERE `id`='$id'";
    $statement = $connect->prepare($sql);
    $statement->execute();
    
    $data = $statement->fetch();

    $sql_type = "SELECT * FROM `type`";
    $statement_type = $connect->prepare($sql_type);
    $statement_type->execute();
    $data_type = $statement_type->fetchAll();
    
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="div-container">
    <header class="text-center bg-dark"><h2 class="text-light p-3">Admin</h2></header>
        <nav class="navbar navbar-expand-lg bg-light">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php?act=list">Danh mục</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php">Trang chủ</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php?act=product">Hàng hóa</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="">Khách hàng</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="">Bình luận</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="">Thống kê</a></li>
            </ul>
        </nav>
       <h2 class="text-center">
           Sửa sản phẩm
</h2>  
      <form class="w-50 mx-auto" method="POST" action="editproduct_req.php">
  <div class="mb-3">
    <input type="text" name="id" class="form-control" id="list-id" value="<?= $data['id']?>" hidden>
    <label for="list-name" class="form-label fs-4">Tên sản phẩm</label>
    <input type="text" name="name" class="form-control" id="list-name" value="<?= $data['name']?>">
    <label for="list-name" class="form-label fs-4">Tên loại</label>
    <br>
    <select name="id_type">
        
            <?php foreach ($data_type as $row) {?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php } ?>
        </select>
        <br>
    <label for="list-name" class="form-label fs-4">Giá</label>
    <input type="text" name="price" class="form-control" id="list-name" value="<?= $data['price']?>">
    <label for="list-name" class="form-label fs-4">Mô tả</label>
 
    <input type="text" name="disc" class="form-control" id="list-name" value="<?= $data['disc']?>">
    <label for="list-name" class="form-label fs-4">Trạng thái</label>
 
    <input type="text" name="status" class="form-control" id="list-name" value="<?= $data['status']?>">
    <label for="list-name" class="form-label fs-4">Giảm giá</label>
 
    <input type="text" name="discount" class="form-control" id="list-name" value="<?= $data['discount']?>">
    <label for="list-name" class="form-label fs-4">Lượt xem</label>
 
    <input type="text" name="view" class="form-control" id="list-name" value="<?= $data['view']?>">
    <label for="list-name" class="form-label fs-4">Ảnh</label>
    <img src="../../public/Admin/image/<?= $data['img']?>" alt="">
    <input type="file" name="img" class="form-control" id="list-name" value="">
  </div>
  
  <button type="submit" class="btn btn-outline-warning">Thêm mới</button>
</form>
      
    </div>
</body>
</html>