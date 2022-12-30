<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>
<?php $egitmenler = Egitmenler::query("select name from egitmenler"); ?>
<div class="row">
    <div class="col-4">
        <form action="<?php echo base_url('admin/kurspost/'); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label>Kurs Adı</label>
                        <input type="text" name="title" required class="form-control">
                    </div>
                    <div class="col-6">
                        <label>Alanı</label>
                        <input type="text" name="tag" required class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label>Fiyatı</label>
                        <input type="number" min="0" name="price" required class="form-control">
                    </div>
                    <div class="col-6">
                        <label>Süre</label>
                        <input type="number" min="0" name="time" required class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label>Eğitmen</label>
                        <select class="form-control" name="author" required>
                        <?php foreach ($egitmenler as $egitmen) {?>
                          <option value="<?= $egitmen->name; ?>"><?= $egitmen->name; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="col-6">
                        <label>Resim</label>
                        <input type="file" name="image" required class="form-control">
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
                    <h3 class="card-title">Eklenen Kurslar</h3>
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
                        <td><?= $con->title ?></td>
                        <td><?= $con->tag ?></td>
                        <td><a href="<?= base_url('admin/kurssil/'.$con->id); ?>"><i class="fas fa-trash-alt" style="color:red;"></i></a></td>
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