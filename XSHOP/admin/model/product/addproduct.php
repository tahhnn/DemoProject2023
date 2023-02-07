
<?php
    include '../connect.php';
    $sql="SELECT * FROM type";
    $kq=$connect->query($sql);

$name = $price = $disc = $status = $discount =$view ="";
$err ="";
    const REQUIRED_MSG = "*Cần nhập*";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['name']) || empty($_POST['price']) || empty($_POST['disc']) || empty($_POST['status']) || empty($_POST['discount']) || empty($_POST['view'])){

            $err = REQUIRED_MSG;      
    }else{
        $name = $_POST['name'];
        $price = $_POST['price'];
        $disc = $_POST['disc'];
        $status = $_POST['status'];
        $discount = $_POST['discount'];
        $view= $_POST['view'];

    }
}
    if (isset($_POST['btn_submit']) && $err == "") {
        
        $img=$_FILES['img']['name'];
        $img_tmp=$_FILES['img']['tmp_name'];
        $id_type=$_POST['id_type'];
        include 'addproduct-req.php';
    
    }
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
   
        <header class="text-center bg-dark"><h2 class="text-light p-3">Admin</h2></header>
        <nav class="navbar navbar-expand-lg bg-light">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php?act=list">Danh mục</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php">Trang chủ</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php?act=product">Sản phẩm</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php?act=customer">Khách hàng</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php?act=cmt">Bình luận</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../index.php?act=">Thống kê</a></li>
            </ul>
        </nav>
<h2 class="text-center">Thêm sản phẩm</h2>
<form class="w-50 mx-auto" method="POST" enctype="multipart/form-data">
    <div>
        <label class="form-label fs-4">Name</label>
        <input class="form-control" type="text" name="name" >
        <span class="text-danger"><?=$err?></span>
    </div>
    <div>
        <label class="form-label fs-4">Image</label>
        <input class="form-control" type="file" name="img">
    </div>
    <div>
        <label class="form-label fs-4">Price</label>
        <input class="form-control" type="text" name="price" >
        <span class="text-danger"><?=$err?></span>
    </div>
    <div>
        <label class="form-label fs-4">Disc</label>
        <input class="form-control" type="text" name="disc" >
        <span class="text-danger"><?=$err?></span>
    </div>
    <div>
        <label class="form-label fs-4">Status</label>
        <input class="form-control" type="text" name="status" >
        <span class="text-danger"><?=$err?></span>
    </div>
    <div>
        <label class="form-label fs-4">Discount</label>
        <input class="form-control" type="text" name="discount" >
        <span class="text-danger"><?=$err?></span>
    </div>
    <div>
        <label class="form-label fs-4">View</label>
        <input class="form-control" type="text" name="view" >
        <span class="text-danger"><?=$err?></span>
    </div>
    <div>
        <label class="form-label fs-4">Thể loại</label>
        <select class="form-control" name="id_type">
            <?php foreach ($kq as $row) {?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <button class="btn btn-outline-warning my-3" type="submit" name="btn_submit">Thêm</button>
</form>