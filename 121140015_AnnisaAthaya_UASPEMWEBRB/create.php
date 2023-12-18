<?php

$db = mysqli_connect('localhost', 'root', '', 'webpakaian_121140015');
if (mysqli_connect_errno()) {
    echo 'Gagal terkoneksi database MYSQL: ' . mysqli_connect_error();
}

if (isset($_POST['add'])) {
    $namapakaian = mysqli_real_escape_string($db, $_POST['namapakaian']);
    $kategori = mysqli_real_escape_string($db, $_POST['kategori']);
    $jumlah = mysqli_real_escape_string($db, $_POST['jumlah']);

    $query = "INSERT INTO pakaian (namapakaian,kategori,jumlah) 
  			  VALUES('$namapakaian','$kategori','$jumlah')";
    if (mysqli_query($db, $query)) {
        //jika terhubung
    } else {
        echo "<script>alert('Terjadi kesalahan!!!');</script>";
    }

    require('./index.php');
}
