<?php
    include 'admin/view/layout/html/header.php';
    //controller
    if (isset($_GET['act'])){
            $act = $_GET['act'];
            switch ($act){
                case 'intro':                    
                    include 'admin/index.php?act=intro';
                    break;
                case 'contact':                    
                    include 'admin/index.php?act=contact';
                    break;
                case 'anyquestion':                             
                    include 'admin/index.php?act=anyquestion';
                    break;
                case 'gopy':                             
                    include 'admin/index.php?act=gopy';
                    break;
                case 'new':                             
                    include 'admin/view/layout/html/register.php';
                    break;
                default:
                    include 'admin/view/layout/html/home.php';
                    break;
            }        
        }else{

        include 'admin/view/layout/html/home.php';
    }
    include 'admin/view/layout/html/footer.php';
?>
