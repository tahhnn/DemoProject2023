<?php
include 'connect.php';
$sql_comment = "SELECT * FROM `comments`";
$statement = $connect->prepare($sql_comment);
$statement->execute();
// $data_comment = $statement->fetchAll(PDO::FETCH_ASSOC);
// Khai báo fetch kiểu mảng kết hợp
$statement->setFetchMode(PDO::FETCH_ASSOC);

// Lấy danh sách kết quả
$data_comment = $statement->fetchAll();

foreach ($data_comment as $key => $value) {
    if ($value['guest_id'] == null) {
        $comments[$key] = $value;
    }
}

foreach ($data_comment as $key => $value) {
    echo !empty($value['guest_id']);
    // if (!empty($value['guest_id']) == 1) {
    //     foreach ($comments as $a => $item) {
    //         // $comments[$a]['guest'] = $value;
    //         array_push($comments[$a], $value);
    //     }
    // }
}

// echo '<pre>';
// print_r($comments);
// echo '<pre>';