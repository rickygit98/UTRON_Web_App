<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data["peserta"]["nama"]; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">
      <?php echo $data["peserta"]["nrp"]; ?>
    </h6>
    <p class="card-text"><?php echo $data["peserta"]["email"]; ?></p>
    <p class="card-text"><?php echo $data["peserta"]["jurusan"]; ?></p>
    <a href="<?php echo BASEURL; ?>/peserta" class="card-link">Back</a>
  </div>
</div>