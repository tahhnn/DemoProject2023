<?php
    include 'admin/model/loadList_type.php';
    include 'admin/model/loadProduct.php';
?>
<div class="div-content">
            <div class="div-content-left">
                <div class="div-slideshow" onclick=" slideshow()">
                    <div class="div-img">
                        <img class="img-slide active" src="admin/public/Admin/image/anh1.jpg" alt="">
                        <img class="img-slide" src="admin/public/Admin/image/anh2.jpg" alt="">
                        <img class="img-slide" src="admin/public/Admin/image/anh3.jpg" alt="">
                        <img class="img-slide" src="admin/public/Admin/image/anh4.jpg" alt="">
                        <img class="img-slide" src="admin/public/Admin/image/SIS-3-1200x1200.jpg" alt="">

                    </div>
                </div>
                <div class="div-product-main">
                    <div class="div-list r">
                        <div class="div-product">
                            <a href="demo-product.html">
                                 <img class="div-img-product" src="admin/public/Admin/image/anh1.jpg" alt="">
                            </a>
                            <span class="span-price" >150.000đ</span>
                            <a href="demo-product.html">
                                <p class="p-name"> san pham 1</p>
                            </a>
                            <a href="demo-product.html">
                                <button class="button-buy btn border-5 border-secondary bg-gradient rounded rounded-pill">Đặt hàng</button>
                            </a>
                        </div>
                    </div>
                    <div class="div-list rounded">
                        <div class="div-product">
                            <img class="div-img-product" src="admin/public/Admin/image/anh1.jpg" alt="">
                            <span class="span-price">150.000đ</span>
                            <p class="p-name"> san pham 1</p>
                            <button class="button-buy btn border-5 border-secondary bg-gradient rounded rounded-pill">Đặt hàng</button>
                        </div>
                    </div>
                    <div class="div-list rounded">
                        <div class="div-product">
                            <img class="div-img-product" src="admin/public/Admin/image/anh1.jpg" alt="">
                            <span class="span-price">150.000đ</span>
                            <p class="p-name"> san pham 1</p>
                            <button class="button-buy btn border-5 border-secondary bg-gradient rounded rounded-pill">Đặt hàng</button>
                        </div>
                    </div>
                    <div class="div-list rounded">
                        <div class="div-product">
                            <img class="div-img-product" src="admin/public/Admin/image/anh1.jpg" alt="">
                            <span class="span-price">150.000đ</span>
                            <p class="p-name"> san pham 1</p>
                            <button class="button-buy btn border-5 border-secondary bg-gradient rounded rounded-pill">Đặt hàng</button>
                        </div>
                    </div>
                    <div class="div-list rounded">
                        <div class="div-product">
                            <img class="div-img-product" src="admin/public/Admin/image/anh1.jpg" alt="">
                            <span class="span-price">150.000đ</span>
                            <p class="p-name"> san pham 1</p>
                            <button class="button-buy btn border-5 border-secondary bg-gradient rounded rounded-pill">Đặt hàng</button>
                        </div>
                    </div>
                    <div class="div-list rounded">
                        <div class="div-product">
                            <img class="div-img-product" src="admin/public/Admin/image/anh1.jpg" alt="">
                            <span class="span-price">150.000đ</span>
                            <p class="p-name"> san pham 1</p>
                            <button class="button-buy btn border-5 border-secondary bg-gradient rounded rounded-pill">Đặt hàng</button>
                        </div>
                    </div>
                </div>
                <div class="div-button-list-product">
                    <button class="button-list-product p-2">1</button>
                    <button class="button-list-product p-2">2</button>
                    <button class="button-list-product p-2">3</button>
                    <button class="button-list-product p-2">></button>
                    <button class="button-list-product p-2">>></button>
                </div>
            </div>

            <div class="div-right-content">
                <div class="div-login">
                    <header> TÀI KHOẢN </header>
                    <form action="">
                        <p>Tên đăng nhập <input type="text" class="form-control" placeholder="Username"
                                aria-label="Username" aria-describedby="basic-addon1"> </p>
                        <p> Mật khẩu <input type="text" class="form-control" placeholder="password"
                                aria-label="Username" aria-describedby="basic-addon1"> </p>

                        <p class="form-control"> <input class="input-checkbox" type="checkbox" name="" id="">Ghi nhớ tài khoản</p>
                        <button type="submit" class="button-login btn">Đăng Nhập </button>
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
                            foreach ($data as $key => $value){ ?>
                                <li class="li-list"> <a href=""> <?=$value['name']?> </a></li>
                                <hr>

                    <?php        }
                      
                      ?>
                        
                    </ul>
                    <input type="text" class="form-control" placeholder="tìm kiếm từ khóa " aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="div-top">
                    <header> Top 10 yêu thích nhất </header>
                    <ul class="ul-list">
                      <?php
                            foreach ($data_product as $key => $value){ ?>
                                <li class="li-list"> <a href=""> <?=$value['name']?> </a></li>
                                <hr>

                    <?php        }
                      
                      ?>
                        
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="THANH">
        <a href="../../../public/Admin/html/">ADMIN</a>
    </div>

    <script>
        function slideshow() {
            var hinhanh = [];

        }
        var slides = document.querySelectorAll('.img-slide'),
            index = 0;
        setInterval(function () {
            var hientai = slides[index];
            if (index == slides.length - 1) {
                index = 0;
            } else {
                index++;
            }
            var tieptheo = slides[index];
            for (var i = 0; i < slides.length; i++) {
                slides[i].classList.remove('active')
            }
            tieptheo.classList.add('active')
        }, 1500);
    </script>
    