<?php $this->load->view('onyuz/include/header'); ?>

<!-- Team Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">EĞİTMENLER</h6>
                <h1 class="mb-5">UZMAN EĞİTMENLER</h1>
            </div>
            <div class="col-2 my-3">
                <input id="myInput" type="text" placeholder="Eğitmen Ara.." class="form-control">
            </div>
            <div class="row g-4">
                <?php foreach ($egitmenler as $egitmen) { ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?= base_url($egitmen->image);?>" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="<?= $egitmen->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="<?= $egitmen->twitter; ?>"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="<?= $egitmen->instagram; ?>"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0"><?= $egitmen->name; ?></h5>
                            <small><?= $egitmen->tag; ?></small>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Team End -->

<?php $this->load->view('onyuz/include/footer'); ?>
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".col-lg-3").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>