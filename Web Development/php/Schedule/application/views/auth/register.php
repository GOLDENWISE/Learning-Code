<section class="vh-100 overflow-auto" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                <form class="mx-1 mx-md-4" action="<?= base_url('index.php/Auth/register'); ?>" method="post">
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <i class="fs-4 bi-person-fill"></i>
                                            <label class="form-label" for="Username">Your Name</label>
                                            <?php if( form_error('username') ) : ?>
                                                <input type="text" id="Username" class="form-control is-invalid" placeholder="maksimal 10 huruf" name="username" value="<?= set_value('username'); ?>"/>
                                            <?php elseif( set_value('username') ) : ?>
                                                <input type="text" id="Username" class="form-control is-valid" placeholder="maksimal 10 huruf" name="username" value="<?= set_value('username'); ?>"/>
                                            <?php else : ?>
                                                <input type="text" id="Username" class="form-control" placeholder="maksimal 10 huruf" name="username" value="<?= set_value('username'); ?>"/>
                                            <?php endif; ?>
                                            <div class="invalid-feedback">
                                                <?= form_error('username'); ?>
                                            </div>    
                                            <div class="valid-feedback">
                                                good
                                            </div>    
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <i class="fs-4 bi bi-envelope-fill"></i>
                                            <label class="form-label" for="Email">Your Email</label>
                                            <?php if( form_error('email') ) : ?>
                                                <input type="email" id="Email" class="form-control is-invalid" name="email" value="<?= set_value('email'); ?>"/>
                                            <?php elseif( set_value('email') ) : ?>
                                                <input type="email" id="Email" class="form-control is-valid" name="email" value="<?= set_value('email'); ?>"/>
                                            <?php else : ?>
                                                <input type="email" id="Email" class="form-control" name="email" value="<?= set_value('email'); ?>"/>
                                            <?php endif; ?>
                                            <div class="invalid-feedback">
                                                <?= form_error('email'); ?>
                                            </div>
                                            <div class="valid-feedback">
                                                good
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <i class="fs-4 bi bi-lock-fill"></i>
                                            <label class="form-label" for="Password">Password</label>
                                            <?php if( form_error('password') ) : ?>
                                                <input type="password" id="Password" class="form-control is-invalid" name="password" placeholder="Minimal 5 digit"/>
                                            <?php else :  ?>
                                                <input type="password" id="Password" class="form-control" name="password" placeholder="Minimal 5 digit"/>
                                            <?php endif; ?>
                                            <div class="invalid-feedback">
                                                <?= form_error('password'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div class="form-outline flex-fill mb-0">
                                            <i class="fs-4 bi bi-key-fill"></i>
                                            <label class="form-label" for="ConfirmPassword">Repeat your password</label>
                                            <?php if( form_error('confirmpassword') ) : ?>
                                                <input type="password" id="ConfirmPassword" class="form-control is-invalid" name="confirmpassword" />
                                            <?php else :  ?>
                                                <input type="password" id="ConfirmPassword" class="form-control" name="confirmpassword" />
                                            <?php endif; ?>
                                            <div class="invalid-feedback">
                                                <?= form_error('confirmpassword'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="<?= base_url('assets/img/draw1.webp'); ?>" class="img-fluid" alt="Sample image">
                            </div>
                        </div>
                    </div>
                    <div class="form-check d-flex justify-content-center mb-5">
                        <a href="<?= base_url('index.php/Auth'); ?>" class="text-decoration-none">&laquo; Back to Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>