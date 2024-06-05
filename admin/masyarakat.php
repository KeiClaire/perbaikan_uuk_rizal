<h5>Halaman Data Masyarakat</h5>
<hr>
<table class="table table-striped table_bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Nama</td>
        <td>Tanggal Aduan</td>
        <td>Isi Aduan</td>
        <td>Lokasi Kejadian</td>
        <td>Hapus</td>
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM masyarakat ORDER BY nama ASC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['tgl_aduan'] ?></td>
            <td><?= $data['isi_aduan'] ?></td>
            <td><?= $data['lok_kejadian'] ?></td>
            <td>
                <a onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="
                ?url=hapus-pengaduan&no_ktp=<?= $data['no_ktp'] ?>" class="btn btn-danger">HAPUS</a>
            </td>
        </tr>
   <?php } ?>
</table>