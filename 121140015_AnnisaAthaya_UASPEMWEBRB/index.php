<?php
require 'koneksi.php';
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>121140015 UAS Pemweb</title>
</head>

<body>

    <div class="main-content">
        <nav class="sidebar">
            <div class="sidebar-content">
            <div class="logo">
                <a href="#">Web Data Pakaian</a>
            </div>
            <div class="menu-content">
                <ul class="menu-items">
                    <li class="item btn-keluar">
                        <a href="login.php" style="background-color: green;">Masuk Admin</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>

        

        <div class="main">
            <div class="container">
                <form method="POST" class="" action="create.php">
                    <div class="input-form">
                        <label for="name" style="font-weight: 700;">Nama pakaian</label>
                        <input type="text" class="" name="namapakaian">
                    </div>
                    <div class="input-form">
                        <label for="name" style="font-weight: 700;">Kategori</label>
                        <div>
                        <input type="radio" id="html" name="kategori" value="Baju">
                        <label for="fiksi">Baju</label><br>
                        <input type="radio" id="html" name="kategori" value="Celana">
                        <label for="fiksi">Celana</label><br>
                        <input type="radio" id="html" name="kategori" value="Sepatu">
                        <label for="fiksi">Sepatu</label><br>
                        </div>
                    </div>
                    <div class="input-form">
                        <label for="name" style="font-weight: 700;">Jumlah</label>
                        <input type="number" class="" name="jumlah">
                    </div>
                    <button type="submit" class="button-add" name="add">Tambah data</button>
                </form>

                <div class="">
                    <h1>Tabel Data Pakaian</h1>
                    <table class="">
                        <thead class="table-head">
                            <tr class="table-head" style="background-color: #68c9fa;">
                                <th scope="col">ID</th>
                                <th scope="col">Nama Pakaian</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM pakaian";
                            $result = $connect_db->query($sql);
                            $count = 0;
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $count = $count + 1;
                            ?>
                                    <tr class="table-body">
                                        <th>
                                            <?php echo $count ?>
                                        </th>
                                        <th>
                                            <?php echo $row["namapakaian"] ?>
                                        </th>
                                        <th>
                                            <?php echo $row["kategori"] ?>
                                        </th>
                                        <th>
                                            <?php echo $row["jumlah"] ?>
                                        </th>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="script.js"></script>

</html>