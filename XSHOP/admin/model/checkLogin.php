<?php
    session_start();
    ob_start();
    include 'connect.php';
    $err = "";
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $sql_check = "SELECT * FROM guest WHERE user='$username' AND pwd='$pwd'";
        $statement = $connect->prepare($sql_check);
        $statement->execute();
        
        $data = $statement->fetch();
        $role = $data['role'];
        $_SESSION['role'] = $role;
        
    }
    ?> 