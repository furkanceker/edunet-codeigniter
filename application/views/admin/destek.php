<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Gelen İletişim Mesajları</h3>

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
                      <th>Konu</th>
                      <th>Mesaj</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php foreach ($destekler as $destek) { ?>
                      <td><?= $destek->id ?></td>
                      <td><?= $destek->name ?></td>
                      <td><?= $destek->mail ?></td>
                      <td><?= $destek->subject ?></td>
                      <td><?= $destek->message ?></td>
                      <td><a href="<?= base_url('admin/desteksil/'.$destek->id); ?>">Sil</a></td>
                    </tr>
                    <?php } ?>
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