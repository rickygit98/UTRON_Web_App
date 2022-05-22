<div class="row">
    <div class="col-lg-6">
        <?php Messages::messages(); ?>
    </div>
</div>

<!-- Button trigger modal -->
<div class="row">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary btnModalAdd mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
        Daftar Sekarang
        </button>
    </div>
</div>

<!-- Searching Input -->
<div class="row">
    <div class="col-lg-6">
        <form action="<?php echo BASEURL; ?>/user/search" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type your keyword ..." aria-label="Recipient's username" aria-describedby="button-addon2"
                id="keyword" name="keyword" autocomplete="off">
                <button class="btn btn-primary" type="submit" id="btnSearch" name="btnSearch">Search</button>
            </div>
        </form>
    </div>
</div>



<div class="row">
    <div class="col-lg-6">
        <h1>Daftar Antrian</h1>

        <ul class="list-group mt-3 d-flex">
            <?php foreach ($data["user"] as $user): ?>
                <li class="list-group-item">
                    <?= $user["nama"] ?> - <?= $user["nik"]; ?>
                <div class="float-end">
                    
                    <!-- Details -->
                    <a href="<?= BASEURL; ?>/user/show/<?= $user["id"] ?>" class="badge bg-primary"> 
                        Detail
                    </a>
                                    
                    <!-- Update -->
                    <a href="<?= BASEURL; ?>/user/update/" class="badge bg-warning btnModalUpdate"
                    data-bs-toggle="modal" data-bs-target="#formModal"
                    data-id="<?php echo $user['id'] ?>"> 
                    Update
                    </a>

                    <!-- Delete -->
                    <a href="<?= BASEURL; ?>/user/delete/<?= $user["id"] ?>" class="badge bg-danger"
                    onclick="return confirm('Apakah anda yakin ingin menghapus data?');">
                    Delete
                    </a>
                </div>

                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Daftar Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      
      <form action="<?= BASEURL; ?>/user/add" method="post">
      <div class="modal-body">

        <!-- hidden ID -->
            <input type="hidden" name="id" id="id">
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
            <div class="row g-3 align-items-left mb-3 d-flex">
                <div class="col-4">
                    <label for="nik" class="col-form-label">NIK : </label>
                </div>
                <div class="col-8">
                    <input type="text" id="nik" name='nik' class="form-control" maxlength="16" required>
                </div>
            </div>
            
        <!-- jenis kelamin -->
            <div class="row g-3 align-items-left mb-3 d-flex">
                <div class="col-4">
                    <label class="col-form-label">Jenis Kelamin : </label>
                </div>
                <div class="col-8">
                    <select class="form-select" aria-label="Default select example" id="jk" name="jk" required>
                        <option value="null" disabled selected>---Specify your gender---</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
           
            </div>
                    
        <!-- Tanggal Lahir -->
            <div class="row g-3 align-items-left mb-3">
                <div class="col-4">
                    <label for="tgl_lahir">Tanggal Lahir :</label>
                </div>
                <div class="col-8">
                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
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
        
        <!-- No Telepon -->
            <div class="row g-3 align-items-left mb-3">
                <div class="col-4">
                    <label for="no_telp" class="col-form-label">No. Telepon: </label>
                </div>
                <div class="col-8">
                    <input type="text" id="no_telp" name="no_telp" class="form-control" required>
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