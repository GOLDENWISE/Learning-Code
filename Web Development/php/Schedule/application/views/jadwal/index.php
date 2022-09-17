<div class="container mt-5 pt-5">
    <h1 class="text-center pb-4">Jadwal</h1>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>" data-type="<?= $this->session->flashdata('type'); ?>"></div>
    <?php $this->session->unset_userdata('message'); ?>
    <?php $this->session->unset_userdata('type'); ?>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <ul class="list-group text-center">
              <li class="list-group-item active" aria-current="true">Senin</li>
              <?php foreach( $Learnings['Senin'] as $Learning ) : ?>
                  <li class="list-group-item"><?= $Learning; ?></li>
              <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-md-3">
            <ul class="list-group text-center">
              <li class="list-group-item active" aria-current="true">Selasa</li>
              <?php foreach( $Learnings['Selasa'] as $Learning ) : ?>
                  <li class="list-group-item"><?= $Learning; ?></li>
              <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-md-3">
            <ul class="list-group text-center">
              <li class="list-group-item active" aria-current="true">Rabu</li>
              <?php foreach( $Learnings['Rabu'] as $Learning ) : ?>
                  <li class="list-group-item"><?= $Learning; ?></li>
              <?php endforeach; ?>
            </ul>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-3 mt-3">
            <ul class="list-group text-center">
              <li class="list-group-item active" aria-current="true">Kamis</li>
              <?php foreach( $Learnings['Kamis'] as $Learning ) : ?>
                  <li class="list-group-item"><?= $Learning; ?></li>
              <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-md-3 mt-3">
            <ul class="list-group text-center">
              <li class="list-group-item active" aria-current="true">Jumat</li>
              <?php foreach( $Learnings['Jumat'] as $Learning ) : ?>
                  <li class="list-group-item"><?= $Learning; ?></li>
              <?php endforeach; ?>
            </ul>
        </div>
        </div>
    </div>
</div>