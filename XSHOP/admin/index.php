<?php
    include 'header.php';
    //controller
    if (isset($_GET['act'])){
            $act = $_GET['act'];
            switch ($act){
                case 'list':                    
                    include './view/list/index_danhmuc.php';
                    break;
                case 'product':                    
                    include './view/product/product.php';
                    break;
                default:
                    include 'home.php';
                    break;
            }        
        }else{

        include 'home.php';
    }
    include 'footer.php';
?>