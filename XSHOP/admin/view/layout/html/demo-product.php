<?php
include '../../../model/load1product.php';
include '../../../model/loadProduct.php';
include '../../../model/loadList_type.php';
include_once '../../../model/LoadComment.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-product.css">
</head>

<body>
    <div class="container">
        <header>
            SIÊU THỊ TRỰC TUYẾN
        </header>
        <nav class="nav-navigation">
            <ul class="ul-navigation">
                <li class="li-navigation">
                    <a href="../../../../index.php?act=home"> Trang chủ</a>
                </li>
                <li class="li-navigation">
                    <a href="">Giới thiệu </a>
                </li>
                <li class="li-navigation">
                    <a href=""> Liên hệ </a>
                </li>
                <li class="li-navigation">
                    <a href="">Góp ý </a>
                </li>
                <li class="li-navigation">
                    <a href="">Hỏi đáp</a>
                </li>

            </ul>
        </nav>
        <!-- thêm sản phẩm vào phần này chú ý dùng fetch trong file model/load1product.php 
        Thêm đường dẫn tới trang chủ-->


        <div class="div-content-left">
        <div class="wrapper" style="background-color: #eee;">
    <div class="product-img">
      <img src="../../../public/Admin/image/<?=$data_1product['img']?>" height="420" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1><?=$data_1product['prd_name']?></h1>
        
        <p><?=$data_1product['disc']?><br> <?=$data_1product['status']?>
      </div>
      <div class="product-price-btn">
        <p><span><?=$data_1product['price']?></span>₫</p>
        <button type="button">buy now</button>
      </div>
    </div>
  </div>
            
        </div>
        
        <div class="div-right-content">
        <div class="div-login">
                    <header> TÀI KHOẢN </header>
                    <form action="../../../model/checkLogin.php" method="post">
                        <p>Tên đăng nhập <input type="text" name="username" class="form-control" placeholder="Username"
                                aria-label="Username" aria-describedby="basic-addon1"> </p>
                        <p> Mật khẩu <input type="text" name="pwd" class="form-control" placeholder="password"
                                aria-label="Username" aria-describedby="basic-addon1"> </p>

                        <p class="form-control"> <input class="input-checkbox" type="checkbox" name="" id="">Ghi nhớ tài khoản</p>
                        <button type="submit" name="login" class="button-login btn">Đăng Nhập </button>
                        <p>
                            <a href=""> Quên mật khẩu </a>
                        </p>
                        <p> <a href="index.php?act=new"> Đăng kí thành viên </a>
                        </p>
                </div>
            <div class="div-list">
                <header> DANH MỤC </header>
                <ul class="ul-list">
                    <?php
                    foreach ($data as $key => $value) { ?>
                        <li class="li-list"> <a href=""> <?= $value['name'] ?> </a></li>
                        <hr>

                    <?php        }

                    ?>
                </ul>
                <input type="text" class="form-control" placeholder="tìm kiếm từ khóa " aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="div-top">
                <header> Top 10 yêu thích nhất </header>
                <?php
                foreach ($data_product as $keys => $values) { ?>
                    <li class="li-list" style="padding: 10px;"><a style="padding: 10px" href=""><?=$values['prd_name']?></a></li>
                    <hr>

                <?php        }

                ?>
            </div>
        </div>
        <div class="div-content-left ">
        <section class="gradient-custom">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card">
          <div class="card-body p-4" style="width: 800px;">
            <h4>Bình Luận gần đây</h4>
            <div class="row">
              <div class="col">
                <div class="d-flex flex-start">
                 
                  <div class="flex-grow-1 flex-shrink-1">
                    <?php
                      foreach ($comment as $key => $value) { ?>
                        <div>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-1">
                        <?=$value['name']?> <span class="small"></span>
                        </p>
                      </div>
                      <p class="small mb-0">
                        <?=$value['comment']?>
                      </p>
                    </div>
                    <hr width="400px">
                   <?php   } ?>
                    
                  </div>
                </div>
                <form class="form-cmt" action="../../../model/comment/addcmt.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="id_product" value="<?=$data_1product['id_product']?>" hidden>
                    <label class="form-label pt-4" for="">Bình luận của bạn :</label>
                        <input class="form-control mb-3" name="content" style="width: 300px;" type="text" placeholder="Comment.....">
                        <button class="btn btn-primary" type="submit">Gửi</button>
                    </form>
                    
              </div>
            </div>
            
          </div>
          
        </div>
        
      </div>
      
    </div>
    
  </div>
  
</section>
            
        </div>
    </div>
</body>

</html>