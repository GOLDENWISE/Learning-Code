<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <!--Menampilkan semua error validasi-->
                    <!-- <?php if( validation_errors() ) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?> -->
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan Nama">
                            <small class="form-text text-danger"><?= form_error("Nama"); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="Email" name="Email" placeholder="Masukkan Email">
                            <small class="form-text text-danger"><?= form_error("Email"); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="NIM" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="NIM" name="NIM" placeholder="Masukkan NIM">
                            <small class="form-text text-danger"><?= form_error("NIM"); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="Jurusan" class="form-label">Jurusan address</label>
                            <input type="text" class="form-control" id="Jurusan" name="Jurusan" placeholder="Masukkan Jurusan">
                            <small class="form-text text-danger"><?= form_error("Jurusan"); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>