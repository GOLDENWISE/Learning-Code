<div class="container mt-5 pt-5">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>" data-type="<?= $this->session->flashdata('type'); ?>"></div>
    <?php $this->session->unset_userdata('message'); ?>
    <?php $this->session->unset_userdata('type'); ?>
    <h1 class="text-center">Tambah Tugas</h1>
    <div class="row justify-content-center mt-4 pt-4">
        <div class="col-md-5">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <select class="form-select"  name="matapelajaran" required>
                            <option selected disabled value="">Mata kuliah</option>
                            <?php foreach( $mapel as $learning ) : ?>
                                <option value="<?= $learning; ?>"><?= $learning; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-select"  name="tipe" required>
                            <option selected disabled value="">Type</option>
                            <option value="Kelompok">Kelompok</option>
                            <option value="Individu">Individu</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <input type="date" class="form-control" name="deadline" placeholder="deadline" required>
                    </div>
                    <div class="mt-3">
                        <input type="time" class="form-control" name="time" required>
                    </div>
                    <div class="mt-3">
                        <textarea class="form-control" placeholder="description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="mt-3 ms-1 row justify-content-center">
                        <button type="submit" class="btn btn-primary col-lg-3">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>