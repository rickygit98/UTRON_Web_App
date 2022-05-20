<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data["user"]["nama"]; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">
      <?php echo $data["user"]["nik"]; ?>
    </h6>
    <p class="card-text"><?php echo $data["user"]["alamat"]; ?></p>
    <p class="card-text"><?php echo $data["user"]["email"]; ?></p>
    <p class="card-text"><?php echo $data["user"]["password"]; ?></p>
    <a href="<?php echo BASEURL; ?>/user" class="card-link">Back</a>
  </div>
</div>