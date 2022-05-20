<div class="row">
    <div class="col-lg-6">
        <?php Messages::messages(); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <h1>Daftar Antrian</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertModal">
        Daftar Sekarang
        </button>

        <ul class="list-group mt-3">
            <?php foreach ($data["user"] as $user): ?>
                <li class="list-group-item">
                    <?= $user["nama"] ?>

                    <!-- Details -->
                    <a href="<?= BASEURL ?>/user/show/<?= $user["id"] ?>" class="badge bg-primary float-right"> 
                    Detail
                    </a>

                    <!-- Delete -->
                    <a href="<?= BASEURL ?>/user/delete/<?= $user["id"] ?>" class="badge bg-danger float-right"
                    onclick="return confirm('Apakah anda yakin ingin menghapus data?');">
                    Delete
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="insertModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="insertModal">Daftar Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="<?= BASEURL ?>/user/add" method="post">

      <div class="modal-body">
    
      <!-- Nama -->
        <div class="row g-3 align-items-left mb-3">
            <div class="col-4">
                <label for="nama" class="col-form-label">Nama : </label>
            </div>
            <div class="col-8">
                <input type="text" id="nama" name='nama' class="form-control" required>
            </div>
        </div>

      <!-- nik -->
        <div class="row g-3 align-items-left mb-3">
            <div class="col-4">
                <label for="nik" class="col-form-label">NIK : </label>
            </div>
            <div class="col-8">
                <input type="text" id="nik" name='nik' class="form-control" maxlength="12" required>
            </div>
        </div>

      <!-- Alamat -->
        <div class="row g-3 align-items-left mb-3">
            <div class="col-4">
                <label for="alamat" class="col-form-label">Alamat : </label>
            </div>
            <div class="col-8">
                <input type="text" id="alamat" name='alamat' class="form-control" required>
            </div>
        </div>

        <!-- Email -->
          <div class="row g-3 align-items-left mb-3">
              <div class="col-4">
                  <label for="email" class="col-form-label">Email : </label>
              </div>
              <div class="col-8">
                  <input type="email" id="email" name='email' class="form-control" required>
              </div>
          </div>

      <!-- Password -->
        <div class="row g-3 align-items-left mb-3">
            <div class="col-4">
                <label for="password" class="col-form-label">Password : </label>
            </div>
            <div class="col-8">
                <input type="password" id="password" name='password' class="form-control" required>
            </div>
        </div>


      </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>

      </form>
    </div>
  </div>
</div>