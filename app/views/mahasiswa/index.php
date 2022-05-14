<div class="row">
    <div class="col-6">
        <h1>Data Mahasiswa</h1>
        <ul class="list-group">
            <?php foreach ($data["mahasiswa"] as $mhs): ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <?= $mhs["name"] ?>
                    <a href="<?= BASEURL ?>/mahasiswa/show/<?= $mhs["id"] ?>">
                    <span class="badge bg-primary">Detail</span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>