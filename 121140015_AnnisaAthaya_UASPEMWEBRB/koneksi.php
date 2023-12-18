<?php
    $connect_db =  mysqli_connect('localhost','root','','webpakaian_121140015');

    if (mysqli_connect_errno()) {
        echo 'Gagal terkoneksi database MYSQL: ' . mysqli_connect_error();
        exit();
    }
?>