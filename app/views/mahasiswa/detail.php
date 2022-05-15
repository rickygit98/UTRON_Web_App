<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data["mahasiswa"]["nama"]; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">
      <?php echo $data["mahasiswa"]["nrp"]; ?>
    </h6>
    <p class="card-text"><?php echo $data["mahasiswa"]["email"]; ?></p>
    <p class="card-text"><?php echo $data["mahasiswa"]["jurusan"]; ?></p>
    <a href="<?php echo BASEURL; ?>/mahasiswa" class="card-link">Back</a>
  </div>
</div>