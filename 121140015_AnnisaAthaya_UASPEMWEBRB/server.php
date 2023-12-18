<?php
require 'session.php';
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
                            <a href="logout.php">Keluar Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <div class="main">
            <div class="container">
                <div class="">
                    <table class="">
                        <thead class="table-head">
                            <tr class="table-head" style="background-color: #68c9fa;">
                                <th scope="col">ID</th>
                                <th scope="col">Nama Pakaian</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Tindakan</th>
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
                                        <th>
                                        <a href="up" Edit</a><a href="read.php?id=<?php echo $row["id_pakaian"] ?>" class="read">Lihat</a>
                                            <a href="up" Edit</a><a href="update.php?id=<?php echo $row["id_pakaian"] ?>" class="update">Update</a>
                                                <a href="up" Edit</a><a href="delete.php?id=<?php echo $row["id_pakaian"] ?>" class="delete">Delete</a>
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

</html>