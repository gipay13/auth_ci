<div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="<?= base_url('passwordrecover') ?>" class="h1">Recover Password</a>
    </div>
    <div class="card-body">
        <p class="login-box-msg"><?= $this->session->userdata('password_reset') ?></p>
		<?= $this->session->flashdata('message') ?>
        <form action="<?= base_url('passwordrecover?email='.$email.'&token='.$token) ?>" method="post">
            <div class="input-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="New Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                       <a href="#" class="text-dark" id="icon-click-password"><i class="fas fa-eye" id="icon-password"></i></a>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <?= form_error('password', '<small class="text-danger"> <i class="fas fa-times"></i> ', '</small>') ?>
            </div>
            <div class="input-group">
                <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Confirm New Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <a href="#" class="text-dark" id="icon-click-repassword"><i class="fas fa-eye" id="icon-repassword"></i></a>
                    </div>
                </div>
            </div>
			<div class="mb-4">
                <?= form_error('repassword', '<small class="text-danger"> <i class="fas fa-times"></i> ', '</small>') ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Change password</button>
                </div>
            </div>
        </form>
        <p class="mt-3 mb-1">
            <a href="<?= base_url() ?>">Login</a>
        </p>
    </div>
</div>
