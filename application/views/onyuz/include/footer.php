<?php $config = Ayarlar::find(1); ?>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Hızlı Menü</h4>
                    <a class="btn btn-link" href="<?= base_url('hakkimizda');?>">Hakkımızda</a>
                    <a class="btn btn-link" href="<?= base_url('iletisim');?>">İletişim</a>
                    <a class="btn btn-link" href="">Gizlilik Politikası</a>
                    <a class="btn btn-link" href="">Şartlar ve Koşullar</a>
                    <a class="btn btn-link" href="">Sıkça Sorulan Sorular</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">İletişim</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?= $config->address; ?></p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?= $config->phone; ?></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><?= $config->mail; ?></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="<?= $config->twitter; ?>"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="<?= $config->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="<?= $config->instagram; ?>"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Galeri</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?= base_url('assets/front/');?>img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?= base_url('assets/front/');?>img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?= base_url('assets/front/');?>img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?= base_url('assets/front/');?>img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?= base_url('assets/front/');?>img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?= base_url('assets/front/');?>img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Bülten</h4>
                    <p>Yeniliklerden haberdar ol!</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                    <form action="<?= base_url('home/mailekle/');?>" method="post">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" name="mail" placeholder="Email girin">
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Üye Ol</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">EduNet</a> Tüm Hakları Saklıdır.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="<?= base_url('');?>">Ana Sayfa</a>
                            <a href="">Çerezler</a>
                            <a href="">Yardım</a>
                            <a href="">Sıkça Sorulan Sorular</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/front/');?>lib/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/front/');?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/front/');?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('assets/front/');?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/front/');?>js/main.js"></script>
</body>

</html>