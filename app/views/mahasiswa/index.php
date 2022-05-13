<div class="container">
    <h1>Data Mahasiswa</h1>
    <?php foreach( $data['mahasiswa'] as $mhs) : ?>
    <ul>
        <li><?= $mhs['name']; ?></li>
        <li><?= $mhs['nrp']; ?></li>
        <li><?= $mhs['email']; ?></li>
        <li><?= $mhs['jurusan']; ?></li>
    </ul>
    <?php endforeach; ?>
</div>