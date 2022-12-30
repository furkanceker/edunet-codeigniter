<?php $this->load->view('onyuz/include/header'); ?>
<div class="container">
    <div class="col-4 mt-5 m-auto">
    <form action="<?php echo base_url('home/uyekayit/'); ?>" method="post">
        <?php flash2read(); ?>
        <div class="form-outline mb-4">
            <label class="form-label" for="username">Kullanıcı Adı</label>
            <input type="text" id="username" name="username" class="form-control" />
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="email">E-Posta</label>
            <input type="email" id="email" name="email" class="form-control" />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="pass">Şifre</label>
            <input type="password" id="pass" name="password" class="form-control" />
        </div>

        <!-- Submit button -->
        <button type="submiit" class="btn col-12 btn-primary btn-block mb-4">Üye Ol</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Hesabın Var Mı? <a href="<?= base_url('giris'); ?>">Giriş Yap</a></p>
        </div>
        </form>
    </div>
</div>
<?php $this->load->view('onyuz/include/footer'); ?>