<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="<?= base_url('assets/img/draw2.svg'); ?>"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="" method="post">
          <div class="form-outline mb-4">
            <?php if( form_error('password') ) : ?>
                <input type="password" id="password" class="form-control form-control-lg is-invalid" name="password" placeholder="Enter new password" />
            <?php else : ?>
                <input type="password" id="password" class="form-control form-control-lg" name="password" placeholder="Enter new password" />
            <?php endif; ?>
            <div class="invalid-feedback">
                <?= form_error('password'); ?>
            </div>
          <div class="form-outline mb-4 mt-3">
            <?php if( form_error('password') ) : ?>
                <input type="password" id="confirmpassword" class="form-control form-control-lg is-invalid" name="password" placeholder="Confirm Password" />
            <?php else : ?>
                <input type="password" id="confirmpassword" class="form-control form-control-lg" name="confirmpassword" placeholder="Confirm Password" />
            <?php endif; ?>
            <div class="invalid-feedback">
                <?= form_error('confirmpassword'); ?>
            </div>
          </div>
          <div class="row">
              <div class="col-sm-4"></div>
              <button type="submit" class="btn btn-primary btn-lg btn-block col-sm-4" name="submit">Send Verification</button>
              <div class="col-sm-4"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>