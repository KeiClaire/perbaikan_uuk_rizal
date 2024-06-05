<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'db_uuk');

if (!$koneksi) {
    echo"Koneksi Anda Gagal";
}

?>