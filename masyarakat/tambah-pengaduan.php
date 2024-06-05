<h5>Halaman Tambah Pengaduan</h5>
<a href="?url=pengaduan" class="btn btn-success">Kembali</a>
<hr>
<form method="post" action="?url=proses-tambah-pengaduan">
    <div class="form-groub mb-2">
        <label>No KTP</label>
        <input type="text" name="no_ktp" class="form-control" required>
    </div>
    <div class="form-groub mb-2">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-groub mb-2">
        <label>Tanggal Aduan</label>
        <input type="date" name="tgl_aduan" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Isi Aduan</label>
        <textarea name="isi_aduan" class="form-control" required></textarea>
    </div>
    <div class="form-group mb-2">
        <label>Lokasi Kejadian</label>
        <textarea name="lok_kejadian" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Kosongkan</button>
    </div>
</form>