<?php $config = Ayarlar::find(1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $config->name; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Favicon -->
    <link href="<?= base_url('assets/front/');?>img/favico.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/front/');?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/front/');?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/front/');?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/front/');?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Yükleniyor...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="<?= base_url(); ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i><?= $config->name; ?></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= base_url(); ?>" class="nav-item nav-link active">Ana Sayfa</a>
                <a href="<?= base_url('hakkimizda'); ?>" class="nav-item nav-link">Hakkımızda</a>
                <a href="<?= base_url('kurslar'); ?>" class="nav-item nav-link">Kurslar</a>
                <a href="<?= base_url('egitmenler'); ?>" class="nav-item nav-link">EĞİTMENLER</a>
                <a href="<?= base_url('iletisim'); ?>" class="nav-item nav-link">İLETİŞİM</a>
            </div>
            <?php if(!$this->session->userdata('userlogin')) { ?>
            <a href="<?= base_url('giris'); ?>" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Giriş Yap<i class="fa fa-arrow-right ms-3"></i></a>
            <?php } else {?>
                <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle btn btn-primary py-4 px-lg-5 d-none d-lg-block" data-bs-toggle="dropdown"><?= $this->session->userdata('username'); ?></a>
                <div class="dropdown-menu fade-down m-0">
                        <a href="<?= base_url('hesabim'); ?>" class="dropdown-item"><i class="fas fa-user text-primary"></i> Profilim</a>
                        <a href="<?= base_url('cikis'); ?>" class="dropdown-item"><i class="fas fa-sign-out-alt text-danger"></i> Çıkış Yap</a>
                </div>
                </div>
            
            <?php } ?>
        </div>
    </nav>
    <!-- Navbar End -->