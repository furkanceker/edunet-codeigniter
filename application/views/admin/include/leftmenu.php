<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?php echo base_url('assets/back/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">EduNet</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/back/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Arama" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin/panel'); ?>" class="nav-link <?php active("panel"); ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>Ana Sayfa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/kullanici'); ?>" class="nav-link <?php active("kullanici"); ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>Kullanıcılar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/egitmen'); ?>" class="nav-link <?php active("egitmen"); ?>">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>Eğitmen Ekle</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/kurs'); ?>" class="nav-link <?php active("kurs"); ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>Kurslar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/destek'); ?>" class="nav-link <?php active("destek"); ?>">
              <i class="nav-icon fas fa-ticket-alt"></i>
              <p>Destek</p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Admin Ayarları
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/sifre'); ?>" class="nav-link <?php active("sifre"); ?>">
                  <i class="fas fa-lock nav-icon"></i>
                  <p>Şifre Değiştir</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" >
            <a href="<?php echo base_url('admin/logout'); ?>" style="background:red;" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Çıkış Yap</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php if(isset($head)){echo $head;} ?></h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/panel'); ?>">Ana Sayfa</a></li>
              <li class="breadcrumb-item active"><?php if(isset($head)){echo $head;} ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <?php flashread(); ?>
    <div class="container-fluid">