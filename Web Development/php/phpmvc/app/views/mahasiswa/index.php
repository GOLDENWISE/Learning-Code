<div class="container mt-4">
    <div class="row">
        <div class="col-4">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
                <!--Form tambah data-->
            <button type="button" class="btn btn-primary tambah" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form action="http://localhost/phpmvc/public/Mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <!--auto complete digunakan untuk menghilangkan history pencarian-->
                    <input type="text" class="form-control" placeholder="Search" name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <h3 class="mt-2">Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach( $data["mhs"] as $mahasiswa ) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mahasiswa["Nama"]; ?>
                        <div class="tombol">
                            <a href="http://localhost/phpmvc/public/Mahasiswa/detail/<?= $mahasiswa["ID"]; ?>" class="badge text-bg-primary text-decoration-none">Detail</a>
                            <a href="http://localhost/phpmvc/public/Mahasiswa/ubah/<?= $mahasiswa["ID"]; ?>" class="badge text-bg-success text-decoration-none tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mahasiswa["ID"]; ?>">Update</a>
                            <a href="http://localhost/phpmvc/public/Mahasiswa/hapus/<?= $mahasiswa["ID"]; ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('yakin?');">Delete</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal: akan muncul ketika tombol tambah data diklik 
     fungsinya sendiri nanti akan berperan sebagai form isi data
     Modal box ini sendiri sama dengan alert di javascript-->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="http://localhost/phpmvc/public/Mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" name="Email" placeholder="Masukkan Email">
            </div>
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Masukkan Nama">
            </div>
            <div class="mb-3">
                <label for="NIM" class="form-label">NIM</label>
                <input type="number" class="form-control" id="NIM" name="NIM" placeholder="Masukkan NIM">
            </div>
            <div class="mb-3">
                <label for="Jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="Jurusan" name="Jurusan" placeholder="Masukkan Jurusan">
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