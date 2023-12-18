<?php
ob_start();
session_start();
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>121140015 UAS Pemweb</title>
</head>

<body>
    <div class="halaman-login">
        <form method="post" action="">
            <h1>Halaman Login</h1>
            <div class="container">
                <label for="uname"><b>Nama Pengguna</b></label>
                <input type="text" placeholder="Masukkan Nama Pengguna" name="username" autocomplete="off" required>

                <label for="psw"><b>Masukkan Kata sandi</b></label>
                <input type="password" placeholder="Masukkan Kata Sandi" name="password" required>

                <div><input class="submit" type="submit" name="submit" value="Masuk"></div>
            </div>
        </form>

        <?php
            if(isset($_POST['submit'])){
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);

                $query = mysqli_query($connect_db, "select * from pengguna where username='$username'");
                $count = mysqli_num_rows($query);

                if($count > 0) {
                    $data = mysqli_fetch_array($query);
                    $role = $data['role'];

                    if($role == 'admin'){
                        $_SESSION['logged_in'] = true;
                        $_SESSION['role'] = 'Admin';

                        header('location: server.php');
                    }else {
                        echo "Password salah!";
                    }
                }else {
                    echo "tidak bisa diakses!";
                }
            }
        ?>

    </div>
</body>

</html>