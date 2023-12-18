<?php
$db = mysqli_connect('localhost', 'root', '', 'webpakaian_121140015');
if (mysqli_connect_errno()) {
    die("Tidak bisa terhubung ke MySQL: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id_pakaian = $_GET['id'];

    $result = mysqli_query($db, "DELETE FROM pakaian WHERE id_pakaian = '$id_pakaian'");
    
    if ($result) {
        echo "Berhasil";
        header("Location: server.php");
    } else {
        die("Gagal menghapus data: " . mysqli_error($db));
    }
}
?>
