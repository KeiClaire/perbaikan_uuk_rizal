<h5>Halaman Pengaduan</h5>
<a href="?url=tambah-pengaduan" class="btn btn-success">Tambah Pengaduan</a>
<hr>
<table class="table table-striped table_bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>No KTP</td>
        <td>Nama</td>
        <td>Tanggal Aduan</td>
        <td>Isi Aduan</td>
        <td>Lokasi Kejadian</td>
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM masyarakat ORDER BY nama ASC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['no_ktp'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['tgl_aduan'] ?></td>
            <td><?= $data['isi_aduan'] ?></td>
            <td><?= $data['lok_kejadian'] ?></td>
            </td>
        </tr>
   <?php } ?>
</table>