<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>

<div class="row">
        <div class="col-3">
        <form action="<?php echo base_url('admin/panelpost/'); ?>" method="post" autocomplete="off">
            <div class="form-group">
                <label>Site Adı</label>
                <input type="text" name="name" required class="form-control" value="<?= $config->name; ?>">
            </div>
            <div class="form-group">
                <label>Lokasyon</label>
                <input type="text" name="address" required class="form-control" value="<?= $config->address; ?>">
            </div>
            <div class="form-group">
                <label>Telefon</label>
                <input type="text" name="phone" required class="form-control" value="<?= $config->phone; ?>">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label>Mail</label>
                        <input type="email" name="mail" required class="form-control" value="<?= $config->mail; ?>">
                    </div>
                    <div class="col-6">
                        <label>Twitter</label>
                        <input type="text" name="twitter" required class="form-control" value="<?= $config->twitter; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label>Facebook</label>
                        <input type="text" name="facebook" required class="form-control" value="<?= $config->facebook; ?>">
                    </div>
                    <div class="col-6">
                        <label>Instagram</label>
                        <input type="text" name="instagram" required class="form-control" value="<?= $config->instagram; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-flat btn-block">Kaydet</button>
            </div>
        </form>
        </div>
        <div class="col-6">
            
        </div>
        <div class="col-3">
            
        </div>
</div>

<?php $this->load->view('admin/include/footer'); ?>
