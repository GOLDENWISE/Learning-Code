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
                                        <h1 class="h4 text-gray-900 mb-2">Change Your Password</h1>
                                        <h5 class="mb-4"><?= $this->session->userdata('reset_email');?></h5>
                                    </div>
                                    <?php if( $this->session->flashdata('message') ) : ?>
                                        <?= $this->session->flashdata('message'); ?>
                                        <?php $this->session->unset_userdata('message'); ?>
                                    <?php endif; ?>
                                    <form class="user" action="<?= base_url('auth/changePassword'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="new_password" placeholder="Enter New Password...">
                                        </div>
                                        <small id="errorMessage" class="form-text text-danger mt-n2"><?= form_error('new_password'); ?></small>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="confirm_password" placeholder="Enter Confirm Password...">
                                        </div>
                                        <small id="errorMessage" class="form-text text-danger mt-n2"><?= form_error('confirm_password'); ?></small>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Reset
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