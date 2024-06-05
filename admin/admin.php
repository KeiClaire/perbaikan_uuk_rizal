<?php
session_start();
if (empty($_SESSION['id_petugas'])) {
    echo"<script>
    alert('maaf Anda belum login');
    window.location.assign('../index2.php');
    </script>";
}

if ($_SESSION['level']!='admin') {
    echo"<script>
    alert('maaf Anda bukan admin');
    window.location.assign('../index2.php');
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Aplikasi Pengaduan Masyarakat</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    
    <h3>Aplikasi Pengaduan Masyarakat</h3>
    <div class="alert alert-success">
        Anda Login Sebagai <b>Admin</b> Aplikasi Pengaduan Masyarakat
    </div>
    <a href="admin.php?url=masyarakat" class="btn btn-success">Masyarakat</a>
    <a href="admin.php?url=logout" class="btn btn-success">Logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <?php
            $file = @$_GET['url'];
            if (empty($file)) {
                echo"<h4>Selamat Datang Di Halaman Admin</h4>";
                echo"Aplikasi Pengaduan Masyarakat digunakan untuk mempermudah dalam mencatat aduan dari masyarakat Kota Samarinda";
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