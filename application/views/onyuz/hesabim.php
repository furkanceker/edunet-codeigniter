<?php $this->load->view('onyuz/include/header'); ?>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= base_url();?>">Ana Sayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hesabım</li>
          </ol>
        </nav>
      </div>
    </div>
    <?php flash2read(); ?>
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="<?= base_url('assets/upload/');?>avatar.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">İsim Soyisim</h5>
            <p class="text-muted mb-1">@<?= $config->username; ?></p>
          </div>
            <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#settings">Hesap Ayarları</button>
            </div>
        </div>
        <!-- <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">@mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
            </ul>
          </div>
        </div> -->
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Ad Soyad</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Johnatan Smith</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $config->email; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Telefon</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Durumu</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= ($config->status==0) ? "Normal Kullanıcı" : "Eğitmen"; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="settings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hesap Ayarları</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('home/ayarlar/')?>" method="post">
        <div class="form-outline mb-4">
            <label class="form-label" for="username">Kullanıcı Adı</label>
            <input type="text" id="username" name="username" class="form-control" value="<?= $config->username; ?>"/>
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="<?= $config->email; ?>"/>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kapat</button>
        <button type="submit" class="btn btn-success">Kaydet</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('onyuz/include/footer'); ?>