    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a link to reset your password!</p>
                                    </div>
                                    <?php if( $this->session->flashdata('message') ) : ?>
                                        <?= $this->session->flashdata('message'); ?>
                                        <?php $this->session->unset_userdata('message'); ?>
                                    <?php endif; ?>
                                    <form class="user" action="<?= base_url('auth/forgotPassword'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="email" name="Email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        </div>
                                        <small id="errorMessage" class="form-text text-danger mt-n2"><?= form_error('Email'); ?></small>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Send Verification to Email
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url(); ?>auth/index">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
