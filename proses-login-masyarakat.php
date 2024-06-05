<?php
$no_ktp = $_POST['no_ktp'];
$password = $_POST['password'];

include'koneksi.php';
$sql = "SELECT * FROM masyarakat WHERE no_ktp='$no_ktp' AND password='$password'";
$query = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($query)>0) {
    session_start();
    $data = mysqli_fetch_array($query);
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['no_ktp'] = $data['no_ktp'];

    header('Location:masyarakat/masyarakat.php');
} else {
    echo"<script>
    alert('no ktp / password salah');
    window.location.assign('index.php');
    </script>";
}
?>