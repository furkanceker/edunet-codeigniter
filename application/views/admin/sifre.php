<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="col-3">
        <form action="<?php echo base_url('admin/sifrepost/'); ?>" method="post" autocomplete="off">
            <div class="form-group">
                <label>Mevcut Şifre</label>
                <input type="password" name="oldpass" required class="form-control">
            </div>
            <div class="form-group">
                <label>Yeni Şifre</label>
                <input type="password" name="newpass" required class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-flat btn-block">Şifre Değiştir</button>
            </div>
        </form>
        </div>
    </div>
</div>

<?php $this->load->view('admin/include/footer'); ?>