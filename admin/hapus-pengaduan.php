<?php

$no_ktp = $_GET['no_ktp'];

include'../koneksi.php';
$sql = "DELETE FROM masyarakat WHERE no_ktp='$no_ktp'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:?url=masyarakat");
} else {
    echo"<script>alert('Maaf data tidak terhapus'); window.location.assign('?url=masyarakat');</script>";
}

?>