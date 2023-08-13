<?= $this->extend('layouts/user') ?>
<?= $this->section('content') ?>

<div style="height: 700px; margin-top:100px" class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="register-form">

            <?= validation_list_errors() ?>

                <?= view("flashdata") ?>
                <?= form_open("registration") ?>
                <h3 class="billing-title text-center">Register</h3>
                <p class="text-center mt-40 mb-30">Create your very own account </p>

                <input value="<?= set_value('name') ?>" name="name" type="text" placeholder="Full name*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Full name*'" required class="common-input mt-20">

                <input value="<?= set_value('phone') ?>" name="phone" type="text" placeholder="Phone*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Phone*'" required class="common-input mt-20">

                <input value="<?= set_value('email') ?>" name="email" type="email" placeholder="Email address*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email address*'" required class="common-input mt-20">

                <input name="password" type="password" placeholder="Password*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password*'" required class="common-input mt-20">

                <input name="password2" type="password" placeholder="Re-type Password*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password*'" required class="common-input mt-20">

                <button class="view-btn color-2 mt-20 w-100"><span style="color: black !important;">Register</span></button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>