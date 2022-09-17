<section class="vh-100 mt-5 pt-5">
    <div class="pt-5">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="<?= base_url('assets/img/draw2.webp'); ?>" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <?php if( $this->session->flashdata('message') ) : ?>
                        <?= $this->session->flashdata('message'); ?>
                        <?php $this->session->unset_userdata('message'); ?>
                    <?php endif; ?>
                    <form action="<?= base_url('index.php/Auth'); ?>" method="post">
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
                            <div class="valid-feedback">
                                good
                            </div> 
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Password</label>
                            <?php if( form_error('password') ) : ?>
                                <input type="password" id="form3Example4" class="form-control form-control-lg is-invalid" name="password" placeholder="Enter password" />
                            <?php else : ?>
                                <input type="password" id="form3Example4" class="form-control form-control-lg" name="password" placeholder="Enter password" />
                            <?php endif; ?> 
                            <div class="invalid-feedback">
                                <?= form_error('password'); ?>
                            </div>   
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="<?= base_url('index.php/Auth/forgot'); ?>" class="text-body">Forgot password?</a>
                            <p class="small fw-bold mt-2 pt-1 mb-0">
                                Don't have an account? 
                                <a href="<?= base_url('index.php/Auth/register'); ?>" class="link-danger">Register</a>
                            </p>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    