<?php
    include 'admin/model/loadList_type.php';
    include 'admin/model/loadProduct.php';
    include 'admin/model/LoadGuest.php';
    session_start();
    
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
                <div class="div-product-main row pt-3">
                    <?php
                        foreach ( $data_product as $key => $val) { ?>
                        
                        <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text"><?=$val['prd_name']?></h4>
                                 <p class="price_text">Price  <span style="color: #262626;"><?=$val['price']?></span></p>
                                 <div class="tshirt_img"><img width="120" src="admin/public/Admin/image/<?=$val['img']?>"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="admin/view/layout/html/demo-product.php?id_product=<?=$val['id_product']?>">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="admin/view/layout/html/demo-product.php?id_product=<?=$val['id_product']?>">See More</a></div>
                                 </div>
                              </div>
                           </div>
                 <?php       }?>
                </div>
                <div class="div-button-list-product">
                    <button class="button-list-product p-2 btn btn-success">1</button>
                    <button class="button-list-product p-2 btn btn-primary">2</button>
                    <button class="button-list-product p-2 btn btn-primary">3</button>
                    <button class="button-list-product p-2 btn btn-primary">></button>
                    <button class="button-list-product p-2 btn btn-primary">>></button>
                </div>
            </div>
            <div class="div-right-content">
                <?php       
                        echo "Xin chào" . " " . $_SESSION['user'];
                        
                        echo "<a href='admin/model/checklogout.php' class='btn btn-primary'>ĐĂNG XUẤT</a>";

                        if($_SESSION['role'] === 1){
                            echo "<a href='index.php?act=new' class='btn btn-primary mx-4'>Đăng ký</a>";

                            echo ' <pre></pre><a href="admin/public/Admin/html/index.php" class="btn btn-primary">Vào trang quản trị</a>';

                        }else{
                            echo '<pre></pre>';
                
                            echo "Chào mừng bạn đến với gian hàng";
                        }
                    ?>
                    
                    
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
                                <li class="li-list"> <a href="admin/view/layout/html/demo-product.php?id_product=<?=$value['id_product']?>"> <?=$value['prd_name']?> </a></li>
                                <hr>

                    <?php        }
                      
                      ?>
                        
                    </ul>
                </div>
            </div>

        </div>
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
    