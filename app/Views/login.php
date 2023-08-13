<?= $this->extend('layouts/user') ?>
<?= $this->section('content') ?>

<div style="height: 700px; margin-top:100px" class="container mt-5">
    <div class="row text-center lgin">
        <div class="col-md-12">

            <?= form_open('login') ?>

            <div class="login-form">
                <h3 style="color: #f41068;;" class="billing-title text-center">Login</h3>

                <input name="email" value="<?= set_value('email') ?>" type="text" placeholder="Username or Email*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Username or Email*'" required class="common-input mt-20">

                <input name="password" type="password" placeholder="Password*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password*'" required class="common-input mt-20">

                <button style="background-color: #f41068;" type="submit" class="view-btn color-2 mt-20 w-100"><span>Login</span></button>

                <div class="mt-20 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center"><input type="checkbox" class="pixel-checkbox" id="login-1"><label for="login-1">Remember me</label></div>
                    <a href="#">Lost your password?</a>
                </div>

            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>
