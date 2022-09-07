<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>Mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Mahasiswa" name="keyword">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <?php if ( empty($students ) ) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Mahasiswa Kosong
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach( $students as $student ) : ?>
                    <li class="list-group-item justify-content-between align-item-right d-flex">
                        <?= $student['Nama']; ?>
                        <div class="buttonContainer">
                            <a href="<?= base_url(); ?>Mahasiswa/detail/<?= $student['ID']; ?>" class="badge text-bg-primary text-decoration-none">Details</a>
                            <a href="<?= base_url(); ?>Mahasiswa/ubah/<?= $student['ID']; ?>" class="badge text-bg-success text-decoration-none">Update</a>
                            <a href="<?= base_url(); ?>Mahasiswa/hapus/<?= $student['ID']; ?>" class="tombol-hapus badge text-bg-danger text-decoration-none">Delete</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>