<!-- Begin Page Content -->
<div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <?php if( $this->session->flashdata('message') ) : ?>
                    <?= $this->session->flashdata('message'); ?>
                    <?= $this->session->unset_userdata('message'); ?>
                <?php endif; ?>
                <form action="<?= base_url('user/changepassword');  ?>" method="post">
                    <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter Current Password">
                        <small id="errorMessage" class="form-text text-danger "><?= form_error('current_password'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter New Password">
                        <small id="errorMessage" class="form-text text-danger "><?= form_error('new_password'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                        <small id="errorMessage" class="form-text text-danger "><?= form_error('confirm_password'); ?></small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->