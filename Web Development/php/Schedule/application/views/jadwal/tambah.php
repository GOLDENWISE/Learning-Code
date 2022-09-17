<div class="container mt-4 pt-4">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>" data-type="<?= $this->session->flashdata('type'); ?>"></div>
    <?php $this->session->unset_userdata('message'); ?>
    <?php $this->session->unset_userdata('type'); ?>
    <!-- <?php if( $this->session->flashdata('message') ) : ?>
    <?php endif; ?>-->
    <div class="row justify-content-center">
        <h1 class="text-center">Tambah/Ganti Jadwal</h1>
        <div class="col-md-9">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="Senin" class="form-label">Senin</label>
                    <?php if( form_error('senin') ) : ?>
                        <input type="text" class="form-control is-invalid" id="Senin" name="senin" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">
                    <?php elseif( set_value('senin') ) : ?>
                        <input type="text" class="form-control is-valid" id="Senin" name="senin" value="<?= set_value('senin'); ?>" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">
                    <?php else : ?>
                        <input type="text" class="form-control" id="Senin" name="senin" value="<?= $Learnings['Senin']; ?>" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">
                    <?php endif; ?>
                    <div class="invalid-feedback">
                        <?= form_error('senin'); ?>
                    </div>    
                    <div class="valid-feedback">
                        good
                    </div>                 
                </div>
                <div class="mb-3">
                    <label for="selasa" class="form-label">Selasa</label>
                    <?php if( form_error('selasa') ) : ?>
                        <input type="text" class="form-control is-invalid" id="selasa" name="selasa" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">
                    <?php elseif( set_value('selasa') ) : ?>
                        <input type="text" class="form-control is-valid" id="selasa" name="selasa" value="<?= set_value('selasa'); ?>" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">
                    <?php else : ?>
                        <input type="text" class="form-control" id="selasa" name="selasa" value="<?= $Learnings['Selasa']; ?>" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">    
                    <?php endif; ?>
                    <div class="invalid-feedback">
                        <?= form_error('selasa'); ?>
                    </div>    
                    <div class="valid-feedback">
                        good
                    </div>                 
                </div>
                <div class="mb-3">
                    <label for="rabu" class="form-label">Rabu</label>
                    <?php if( form_error('rabu') ) : ?>
                        <input type="text" class="form-control is-invalid" id="rabu" name="rabu" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">
                    <?php elseif( set_value('rabu') ) : ?>
                        <input type="text" class="form-control is-valid" id="rabu" name="rabu" value="<?= set_value('rabu'); ?>" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">
                    <?php else : ?>
                        <input type="text" class="form-control" id="rabu" name="rabu" value="<?= $Learnings['Rabu']; ?>" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">
                    <?php endif; ?>
                    <div class="invalid-feedback">
                        <?= form_error('rabu'); ?>
                    </div>    
                    <div class="valid-feedback">
                        good
                    </div>                 
                </div>
                <div class="mb-3">
                    <label for="kamis" class="form-label">Kamis</label>
                    <?php if( form_error('kamis') ) : ?>
                        <input type="text" class="form-control is-invalid" id="kamis" name="kamis" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">
                    <?php elseif( set_value('kamis') ) : ?>
                        <input type="text" class="form-control is-valid" id="kamis" name="kamis" value="<?= set_value('kamis'); ?>" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">
                    <?php else : ?>
                        <input type="text" class="form-control" id="kamis" name="kamis" value="<?= $Learnings['Kamis']; ?>" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">
                    <?php endif; ?>
                    <div class="invalid-feedback">
                        <?= form_error('kamis'); ?>
                    </div>    
                    <div class="valid-feedback">
                        good
                    </div>                 
                </div>
                <div class="mb-3">
                    <label for="jumat" class="form-label">Jumat</label>
                    <?php if( form_error('jumat') ) : ?>
                        <input type="text" class="form-control is-invalid" id="jumat" name="jumat" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">
                    <?php elseif( set_value('jumat') ) : ?>
                        <input type="text" class="form-control is-valid" id="jumat" name="jumat" value="<?= set_value('jumat'); ?>" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">
                    <?php else : ?>
                        <input type="text" class="form-control" id="jumat" name="jumat" value="<?= $Learnings['Jumat']; ?>" placeholder="matapelajaran1,matapelajaran2 (masukkan mata kuliah dengan koma tanpa spasi)">    
                    <?php endif; ?>
                    <div class="invalid-feedback">
                        <?= form_error('jumat'); ?>
                    </div>    
                    <div class="valid-feedback">
                        good
                    </div>                 
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>