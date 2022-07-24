<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambahkan Data+
            </button>
            <h3 class="mt-3">Daftar Mahasiswa</h3>
                <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) :?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger text-decoration-none float-end" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        <a href="<?= BASEURL;?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-success text-decoration-none float-end mx-1 tampilModalUbah" data-id="<?= $mhs['id']?>" data-bs-toggle="modal" data-bs-target="#formModal">Ubah</a>
                        <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary text-decoration-none float-end mx-1">Detail</a>
                    </li>
                <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambahkan Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="nama" class="form-label">Nama </label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="nim" class="form-label">Nim </label>
                    <input type="text" class="form-control" id="nim" name="nim">
                </div>
                <div class="form-group">
                    <label for="prodi" class="form-label">Prodi </label>
                    <select class="form-control" id="prodi" name="prodi">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Manajemen Informasi">Manajemen Informasi</option>
                    </select>
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
            </div>
        </div>
    </div>
</div>