<?php $this->load->view('onyuz/include/header'); ?>

<div class="container">
    <div class="col-4 mt-5 m-auto">
    <?php if($this->session->flashdata('error')){echo "<div class='alert alert-danger'>".$this->session->flashdata('error').'</div>'; } ?>
    <form action="<?php echo base_url('home/girisyap/'); ?>" method="post">
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
        <button type="submit" class="btn col-12 btn-primary btn-block mb-4">Giriş Yap</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Hesabın Yok Mu? <a href="<?= base_url('kayit'); ?>">Üye Ol</a></p>
        </div>
        </form>
    </div>
</div>


<?php $this->load->view('onyuz/include/footer'); ?>