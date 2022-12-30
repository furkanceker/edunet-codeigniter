<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>
<div class="row">
    <div class="col-4">
        <form action="<?php echo base_url('admin/egitmenpost/'); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label>Eğitmen Adı</label>
                        <input type="text" name="name" required class="form-control">
                    </div>
                    <div class="col-6">
                        <label>Alanı</label>
                        <input type="text" name="tag" required class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
<!--                     <div class="col-6">
                        <label>Mail</label>
                        <input type="email" name="mail" required class="form-control">
                    </div> -->
                    <div class="col-12">
                        <label>Resim</label>
                        <input type="file" name="image" required class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        <label>Twitter</label>
                        <input type="text" name="twitter" required class="form-control">
                    </div>
                    <div class="col-4">
                        <label>Facebook</label>
                        <input type="text" name="facebook" required class="form-control">
                    </div>
                    <div class="col-4">
                        <label>Instagram</label>
                        <input type="text" name="instagram" required class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-flat btn-block">Kaydet</button>
            </div>
        </form>
    </div>
    <div class="col-8">
    <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Eklenen Eğitmenler</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th style="width: 10px">#</th>
                        <th>Adı</th>
                        <th>Alanı</th>
                        <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $say = 1; foreach ($config as $con) { ?> 
                        <tr>
                        <td><?= $say ?></td>
                        <td><?= $con->name ?></td>
                        <td><?= $con->tag ?></td>
                        <td><a href="<?= base_url('admin/egitmensil/'.$con->id); ?>"><i class="fas fa-trash-alt" style="color:red;"></i></a></td>
                        </tr>
                        <?php $say++; } ?>
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
    </div>
</div>
<?php $this->load->view('admin/include/footer'); ?>