<?php

$nama = $_POST['nama'];
$tgl_aduan = $_POST['tgl_aduan'];
$isi_aduan = $_POST['isi_aduan'];
$lok_kejadian = $_POST['lok_kejadian'];

include'../koneksi.php';
$sql = "UPDATE masyarakat SET nama='$nama', tgl_aduan='$tgl_aduan', isi_aduan='$isi_aduan', lok_kejadian='$lok_kejadian'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:?url=pengaduan");
} else {
    echo"<script>alert('Maaf data tidak tersimpan'); window.location.assign('?url=pengaduan');</script>";
}

?>