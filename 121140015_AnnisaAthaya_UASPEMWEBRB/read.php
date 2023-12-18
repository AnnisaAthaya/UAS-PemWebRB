<?php

require('koneksi.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $namapakaian = mysqli_real_escape_string($connect_db, $_POST['namapakaian']);
    $kategori = mysqli_real_escape_string($connect_db, $_POST['kategori']);
    $jumlah = mysqli_real_escape_string($connect_db, $_POST['jumlah']);

    mysqli_query($connect_db, "UPDATE pakaian SET namapakaian='$namapakaian',kategori='$kategori' ,jumlah='$jumlah' WHERE id_pakaian='$id'");

    header("Location:server.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {

    $id = $_GET['id'];
    $result = mysqli_query($connect_db, "SELECT * FROM pakaian WHERE id_pakaian=" . $_GET['id']);

    $row = mysqli_fetch_array($result);

    if ($row) {

        $id = $row['id_pakaian'];
        $namapakaian = $row['namapakaian'];
        $kategori = $row['kategori'];
        $jumlah = $row['jumlah'];
    } else {
        //
    }
}
?>

<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>121140015 UAS Pemweb</title>
</head>

<body>


    <div class="container-fluid text-center">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />

            <table border="1">
                <tr>
                    <td colspan="2">
                        <h1 class="text-primary text-center"><b>Lihat Data</b></h1>
                    </td>
                </tr>
                <tr>
                    <td width="179"><b>Nama Pakaian</b></td>
                    <td><label>
                            <input disabled type="text" name="namapakaian" value="<?php echo $namapakaian; ?>" />
                        </label></td>
                </tr>

                <tr>
                    <td width="179"><b>Kategori</b></td>
                    <td><label>
                            <input disabled type="text" name="kategori" value="<?php echo $kategori; ?>" />
                        </label></td>
                </tr>

                <tr>
                    <td width="179"><b>Jumlah</b></td>
                    <td><label>
                            <input disabled type="text" name="jumlah" value="<?php echo $jumlah; ?>" />
                        </label></td>
                </tr>

                <tr align="center">
                    <td colspan="2"><label>
                            <a href="server.php">Kembali</a>
                        </label></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>