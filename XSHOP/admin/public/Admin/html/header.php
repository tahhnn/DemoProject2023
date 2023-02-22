<?php
    include '../../../model/connect.php';
    include '../../../model/loadProduct.php';
    include '../../../model/loadList_type.php';
    include '../../../model/LoadAllCmt.php';
    include '../../../model/LoadGuest.php';
    session_start();
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
        <header class="text-center bg-dark"><h2 class="text-light p-3">Admin <?=$_SESSION['user']?></h2></header>
        <a href="../../../../index.php">QUAY LẠI TRANG CHÍNH</a>
        <nav class="navbar navbar-expand-lg bg-light">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../../public/Admin/html/index.php?act=listproduct">Danh mục</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../../public/Admin/html/index.php?act=home">Trang chủ</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../../public/Admin/html/index.php?act=product">Sản phẩm</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../../public/Admin/html/index.php?act=guest">Khách hàng</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../../public/Admin/html/index.php?act=comment">Bình luận</a></li>
                <li class="nav-item border rounded-3 border-dark m-1 bg-light"><a class="text-dark nav-link active" href="../../../public/Admin/html/index.php?act=thongke">Thống kê</a></li>
            </ul>
        </nav>