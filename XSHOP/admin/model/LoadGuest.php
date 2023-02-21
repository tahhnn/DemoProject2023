<?php
    include 'connect.php';
    $sql_guest = "SELECT * FROM guest";
    $statement_guest = $connect->prepare($sql_guest);
    $statement_guest->execute();
    
    $guest_data = $statement_guest->fetchAll();
    ?>
