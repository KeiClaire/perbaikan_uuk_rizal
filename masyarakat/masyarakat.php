<?php
session_start();
if (empty($_SESSION['no_ktp'])) {
    echo"<script>
    alert('maaf Anda belum login');
    window.location.assign('../index.php');
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masyarakat - Aplikasi Pengaduan Masyarakat</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    
    <h3>Aplikasi Pengaduan Masyarakat</h3>
    <div class="alert alert-success">
        Anda Login Sebagai Siswa <b><?= $_SESSION['nama'] ?></b> di Aplikasi Pengaduan Masyarakat
    </div>
    <a href="masyarakat.php" class="btn btn-success">Masyarakat</a>
    <a href="masyarakat.php?url=pengaduan" class="btn btn-success">Pengaduan</a>
    <a href="masyarakat.php?url=logout" class="btn btn-success">Logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <?php
            $file = @$_GET['url'];
            if (empty($file)) {
                echo"<h4>Selamat Datang Di Halaman Aplikasi Pengaduan Masyarakat</h4>";
                echo"Aplikasi Pengaduan Masyarakat digunakan untuk mempermudah dalam mencatat pengaduan masyarakat Kota Samarinda";
                echo"<hr>";
                include'tabel-masyarakat.php';
            } else {
                include $file.'.php';
            }
            ?>
        </div>
    </div>
</div>    
<script src="../js/bootstrap.bundle.min.js"></script> 
</body>
</html>