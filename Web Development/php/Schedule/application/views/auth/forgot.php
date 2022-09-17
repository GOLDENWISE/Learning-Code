<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="<?= base_url('assets/img/draw2.svg'); ?>"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="<?= base_url('index.php/Auth/forgot'); ?>" method="post">
          <div class="form-outline mb-4">
            <label class="form-label" for="Email">Email address</label>
            <?php if( form_error('email') ) : ?>
                <input type="email" id="Email" class="form-control form-control-lg is-invalid" name="email" placeholder="Enter a valid email address" />
            <?php elseif( set_value('email') ) : ?>
                <input type="email" id="Email" class="form-control form-control-lg is-valid" value="<?= set_value('email'); ?>" name="email" placeholder="Enter a valid email address" />
            <?php elseif( $this->session->has_userdata('email') ) : ?>
                <input type="email" id="Email" class="form-control form-control-lg is-valid" value="<?= $this->session->userdata('email'); ?>" name="email" placeholder="Enter a valid email address" />
                <?php $this->session->unset_userdata('email'); ?>
            <?php else : ?>
                <input type="email" id="Email" class="form-control form-control-lg" name="email" placeholder="Enter a valid email address" />
            <?php endif; ?>
            <div class="invalid-feedback">
                <?= form_error('email'); ?>
            </div>
          </div>

          <div class="row">
              <div class="col-sm-4"></div>
              <button type="submit" class="btn btn-primary btn-lg btn-block col-sm-4" name="submit">Send Verification</button>
              <div class="col-sm-4"></div>
          </div>

        </form>
        <div class="form-check d-flex justify-content-center mt-3">
            <a href="<?= base_url('index.php/Auth'); ?>" class="text-decoration-none">&laquo; Back to Login</a>
        </div>
      </div>
    </div>
  </div>
</section>