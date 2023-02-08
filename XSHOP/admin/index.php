<?php
    include './view/layout/html/header.php';
    //controller
    if (isset($_GET['act'])){
            $act = $_GET['act'];
            switch ($act){
                case 'intro':                    
                    include './index.php?act=intro';
                    break;
                case 'contact':                    
                    include './index.php?act=contact';
                    break;
                case 'anyquestion':                             
                    include './index.php?act=anyquestion';
                    break;
                case 'gopy':                             
                    include './index.php?act=gopy';
                    break;
                default:
                    include './view/layout/html/home.php';
                    break;
            }        
        }else{

        include './view/layout/html/home.php';
    }
    include './view/layout/html/footer.php';
?>