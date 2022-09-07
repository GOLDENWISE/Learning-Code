    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="Name" name="Name" placeholder="Name" value="<?= set_value('Name'); ?>">
                                </div>
                                <small id="errorMessage" class="form-text text-danger mt-n2"><?= form_error('Name'); ?></small>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="Email" name="Email" placeholder="Email Address" value="<?= set_value('Email'); ?>">
                                </div>
                                <small id="errorMessage" class="form-text text-danger mt-n2"><?= form_error('Email'); ?></small>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                        id="Password" name="Password" placeholder="Password">
                                        <small id="errorMessage" class="form-text text-danger "><?= form_error('Password'); ?></small>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                        id="PasswordRepeat" name="confirmPassword" placeholder="Repeat Password">
                                        <small id="errorMessage" class="form-text text-danger "><?= form_error('confirmPassword'); ?></small>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                    Submit
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/forgotPassword'); ?>">Forgot Password?</a>
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

    