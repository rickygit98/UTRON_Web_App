<div class="row">
    <div class="col-6">
        <h1>Daftar Peserta</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertModal">
        Tambahkan Peserta
        </button>

        <ul class="list-group mt-3">
            <?php foreach ($data["peserta"] as $pst): ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <?= $pst["nama"] ?>
                    <a href="<?= BASEURL ?>/peserta/show/<?= $pst["id"] ?>">
                    <span class="badge bg-primary">Detail</span>
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
        <h5 class="modal-title" id="insertModal">Tambahkan Peserta Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="<?= BASEURL ?>/peserta/add" method="post">

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

      <!-- NRP -->
        <div class="row g-3 align-items-left mb-3">
            <div class="col-4">
                <label for="nrp" class="col-form-label">NRP : </label>
            </div>
            <div class="col-8">
                <input type="text" id="nrp" name='nrp' class="form-control" maxlength="8" required>
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

      <!-- Jurusan -->
        <div class="row g-3 align-items-left mb-3">
            <div class="col-4">
                <label for="jurusan" class="col-form-label">Jurusan : </label>
            </div>
            <div class="col-8">
                <input type="text" id="jurusan" name='jurusan' class="form-control" required>
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