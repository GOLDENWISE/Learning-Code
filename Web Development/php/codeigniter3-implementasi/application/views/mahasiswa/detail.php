<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $detail["Nama"]; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $detail["NIM"] ?></h6>
                    <p class="card-text"><?= $detail["Email"] ?></p>
                    <p class="card-text"><?= $detail["Jurusan"] ?></p>
                    <a href="<?= base_url(); ?>Mahasiswa/index" class="card-link text-decoration-none">&laquo; back</a>
                </div>
            </div>
        </div>
    </div>
</div>