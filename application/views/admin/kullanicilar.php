<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kayıtlı Kullanıcılar</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" id="search" class="form-control float-right" placeholder="Ara..">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Kullanıcı Adı</th>
                      <th>Email</th>
                      <th>Durum</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php $say = 1; foreach ($kullanicilar as $kullanici) { ?>
                      <td><?= $say ?></td>
                      <td><?= $kullanici->username ?></td>
                      <td><?= $kullanici->email ?></td>
                      <td><a href="<?= ($kullanici->status == 0) ? base_url('admin/egitmenyap/'.$kullanici->id) : base_url('admin/kullaniciyap/'.$kullanici->id); ?>"><?= ($kullanici->status == 0) ? "Eğitmen Yap" : "Kullanıcı Yap"; ?></a></td>
                      <td><a href="<?= base_url('admin/kullanicisil/'.$kullanici->id); ?>">Sil</a></td>
                    </tr>
                    <?php $say++; } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
<?php $this->load->view('admin/include/footer'); ?>
<script>
    $(document).ready(function(){
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("table tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>