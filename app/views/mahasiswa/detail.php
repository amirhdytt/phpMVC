<div class="container mt-5 d-flex justify-content-center">
  <div class="card col-sm-8" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
      <p class="card-text"><?= $data['mhs']['email']; ?></p>
      <p class="card-link"><?= $data['mhs']['jurusan']; ?></p>
      <a href="<?= BASEURL; ?>/mahasiswa" class="card-link d-block text-left">Kembali</a>
    </div>
  </div>
</div>