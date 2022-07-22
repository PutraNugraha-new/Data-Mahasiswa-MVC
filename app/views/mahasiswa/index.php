<div class="container mt-5">
    <div class="row">
        <col-6>
            <h3>Daftar Mahasiswa</h3>

            <?php foreach($data['mhs'] as $mhs) :?>
                <ul>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['nim']; ?></li>
                    <li><?= $mhs['prodi']; ?></li>
                </ul>
            <?php endforeach; ?>
        </col-6>
    </div>
</div>