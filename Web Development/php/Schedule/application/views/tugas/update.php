<div class="container mt-5 pt-5">
    <h1 class="text-center">Update Tugas</h1>
    <div class="row justify-content-center mt-4 pt-4">
        <div class="col-md-5">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <select class="form-select"  name="matapelajaran">
                            <?php foreach( $mapel as $learning ) : ?>
                                <?php if( $learning == $matapelajaran ) : ?>
                                    <option value="<?= $learning; ?>" selected><?= $learning; ?></option>
                                <?php else : ?>
                                    <option value="<?= $learning; ?>"><?= $learning; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-select"  name="tipe">
                            <?php if( $tipe == "Kelompok" ) : ?>
                                <option value="Kelompok" selected>Kelompok</option>
                                <option value="Individu">Individu</option>
                            <?php else : ?>
                                <option value="Individu" selected>Individu</option>
                                <option value="Kelompok">Kelompok</option>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="mt-3">
                        <input type="date" class="form-control" name="deadline" placeholder="deadline" value="<?= $deadline; ?>" required>
                    </div>
                    <div class="mt-3">
                        <input type="time" class="form-control" name="time" value="<?= $time ?>">
                    </div>
                    <div class="mt-3">
                        <textarea class="form-control" placeholder="description" name="description" rows="3" ><?= $description; ?></textarea>
                    </div>
                    <div class="mt-3 ms-1 row justify-content-center">
                        <button type="submit" class="btn btn-primary col-lg-3">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>