<div class="container m-2 p-2">
    <h1 class="text-center">Daftar Tugas</h1>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>" data-type="<?= $this->session->flashdata('type'); ?>"></div>
    <?php $this->session->unset_userdata('message'); ?>
    <?php $this->session->unset_userdata('type'); ?>
    <div class="row mt-3 me-3 ms-1 justify-content-center xl:justify-content-center">
        <?php foreach( $tugas as $t ) : ?>
            <div class="col-xl-4 mb-3">
                <div class="card" style="width: 20rem;">
                  <div class="card-body text-center">
                    <h5 class="card-title "><?= $t['matapelajaran']; ?></h5>
                    <p class="card-text "><?= $t['sisa']; ?></p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="bi bi-calendar"></i> <?= $t['deadline']; ?></li>
                    <li class="list-group-item"><i class="bi bi-clock"></i> <?= $t['time']; ?></li>
                    <li class="list-group-item">Tipe: <?= $t['tipe'] ?></li>
                    <li class="list-group-item">Deskripsi: <?= $t['description']; ?></li>
                  </ul>
                  <div class="card-body row text-center">
                    <div class="col-md-6">
                        <a href="<?= base_url('index.php/Tugas/update/').$t['id']; ?>" class="card-link btn btn-success">Update</a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url('index.php/Tugas/delete/').$t['id']; ?>" class="card-link btn btn-danger delete-button">Delete</a>
                    </div>
                  </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>