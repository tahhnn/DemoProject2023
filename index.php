<?php
    session_start();
    if(isset($_POST['login'])){
        include 'XSHOP/admin/model/connect.php';
        $username = $_POST['name'];
        $pwd = $_POST['pwd'];
        if(!$username || !$pwd){
            echo "<script>alert('username hoặc password đang trống')</script>";
            exit;
        }         
            $checkdata = "SELECT user, pwd FROM guest WHERE user = '$username' AND pwd = '$pwd' LIMIT 1";
            $statement_check = $connect->prepare($checkdata);
            $statement_check->execute();
        if($statement_check->rowCount() == 0){
            echo"<script>alert('Tên đăng nhập không tồn tại')</script>";
        exit;    
    }
        $data_check = $statement_check->fetch();
        if ($pwd != $data_check['pwd']) {
            echo "<script>alert('Mật khẩu sai')</script>";

        }
        $_SESSION['name'] = $username;
        echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='XSHOP/index.php'>Về trang chủ</a>";
        die();
}
    
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

<div class="div-login my-5 w-25 mx-auto rounded-1 border-success border-5 p-3 border border-1">
    <header class="w-100 bg-success text-center p-3"> TÀI KHOẢN </header>
    <form class="w-50 mx-auto my-5 " action="" method="POST">
        <p>Tên đăng nhập <input type="text" class="form-control" placeholder="Username"
                aria-label="Username" aria-describedby="basic-addon1" name="name"> </p>
        <p> Mật khẩu <input type="password" class="form-control" placeholder="password"
                aria-label="" name="pwd" aria-describedby="basic-addon1"> </p>

        <button type="submit" class="button-login btn btn-danger" name="login">Đăng Ký </button>
      
</div>
</body>
</html>