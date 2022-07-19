<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('authContent'); ?>
<p class="login-box-msg"><?= lang('Auth.loginTitle') ?></p>
<?= view('Myth\Auth\Views\_message_block') ?>

<form action="<?= url_to('login') ?>" method="post">
    <?php if ($config->validFields === ['email']) : ?>
        <?= csrf_field() ?>
        <div class="input-group mb-3">
            <input type="email" class="form-control" name="login" placeholder="<?= lang('Auth.email') ?>">
            <div class="invalid-feedback">
            </div>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
            <div class="invalid-feedback">
            </div>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="<?= lang('Auth.password') ?>">
        <div class="invalid-feedback">
            <?= session('errors.password') ?>
        </div>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <?php if ($config->allowRemembering) : ?>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                        <?= lang('Auth.rememberMe') ?>
                    </label>
                </div>
            <?php endif; ?>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
        </div>
        <!-- /.col -->
    </div>
</form>

<!-- /.social-auth-links -->

<?php if ($config->allowRegistration) : ?>
    <p><a href="<?= url_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
<?php endif; ?>
<?php if ($config->activeResetter) : ?>
    <p><a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
<?php endif; ?>
<?= $this->endSection(); ?>