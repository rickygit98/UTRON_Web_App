<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data["user"]["nama"]; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">
      <?php echo $data["user"]["nik"]; ?>
    </h6>
    <p class="card-text"><?php echo $data["user"]["jenis_kelamin"]; ?></p>
    <p class="card-text"><?php echo $data["user"]["tgl_lahir"]; ?></p>
    <p class="card-text"><?php echo $data["user"]["alamat"]; ?></p>
    <p class="card-text"><?php echo $data["user"]["no_telp"]; ?></p>
    <a href="<?php echo BASEURL; ?>/user" class="card-link">Back</a>
  </div>
</div>