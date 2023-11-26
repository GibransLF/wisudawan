<br>
<center>
    <h1>Tambah data Wisudawan Lulus</h1>
</center>

<div style="margin: 2cm 8cm;">
    <form action="<?= base_url("wisudawan/create") ?>" method="post">
    <!-- NIM -->
    <div class="input-group mb-3">
    <input type="number" class="form-control" placeholder="Masukan NIM" aria-label="NIM" name="nim" required>
    </div>
    <!-- nama -->
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Masukan Nama" aria-label="nama" name="nama" required>
    </div>
    <!-- jurusan -->
    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Masukan Jurusan" aria-label="jurusan" name="jurusan" required>
</div>
<!-- tgl_lulus -->
<div class="mb-3">
    <div class="input-group">
    <input type="date" class="form-control" placeholder="Masukan tgl lulus" aria-label="tgl lulus" name="tglLulus" required>
    </div>
    <div class="form-text" id="basic-addon4">Masukan tanggal lulus Wisudawan</div>
</div>
<!-- IPK -->
<div class="mb-3">
    <div class="input-group">
        <input type="number" class="form-control" placeholder="Masukan IPK" aria-label="IPK" name="ipk" required step="0.01">
    </div>
    <div class="form-text" id="basic-addon4">Gunakan titik (.) jika angka desimal</div>
</div>
<!-- judul skripsi -->
<div class="input-group">
  <span class="input-group-text"><b>Masukan Judul Skripsi</b></span>
  <textarea class="form-control" aria-label="With textarea" name="judulSkripsi"></textarea>
</div>
<br>    
<div class="d-flex justify-content-evenly">
    <a href="<?= base_url("wisudawan/index") ?>" type="button" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-success">Tambah</button>
</div>
</form>
</div>