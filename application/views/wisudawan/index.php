<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url("wisudawan/index") ?>">Wisudawan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end navbar -->
<br>
<center>
    <h1>Wisudawan Lulus</h1>
</center>
<!-- content -->
<a href="<?= base_url("wisudawan/add") ?>" class="btn btn-primary" style="float: right; margin-right: 20px;">Tambah +</a>
<br>
<br>
<table class="table">
  <thead class="table-dark">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>JURUSAN</th>
        <th>TGL LULUS</th>
        <th>IPK</th>
        <th>JUDUL SKRIPSI</th>
        <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $i = 0; 
        foreach($wisudawan  as $w): 
            $i++;
            ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $w -> nim ?></td>
            <td><?= $w -> nama ?></td>
            <td><?= $w -> jurusan ?></td>
            <td><?= $w -> tanggal_lulus ?></td>
            <td><?= $w -> ipk ?></td>
            <td><?= $w -> judul_skripsi ?></td>
            <td>
                <a href="<?= base_url("wisudawan/edit?id="). $w->id ?>" type="button" class="btn btn-warning">Ubah</a>
                <a href="<?= base_url("wisudawan/delete?id="). $w->id ?>" type="button" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
  </tbody>
</table>
<!-- end content -->