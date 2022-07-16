<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('_partials/talent_navbar_overflow.php') ?>
    <section id="talentBio" class="card-section talent-bio session-dashboard">
        <div class="container">
            <div class="card w-100">
                <div class="card-body row">
                    <div class="col-12">
                        <div class="card-text-box">
                            <p class="card-title d-block white mb-4 text-justify">Find A Session With Profesional</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mt-4">
                        <a href="<?= site_url('talent/session/profile') ?>">
                            <div class="row justify-content-center">
                                <div class="col-12 card-profile-img-box">
                                    <div class="card-img-circle">
                                        <img src="<?= base_url('assets/img/session-3.png') ?>" class="card-img-circle card-img no-border" alt="person picture">
                                    </div>
                                </div>
                                <div class="col-12 card-text-box text-center">
                                    <p class="card-title d-block blue mb-1 mt-2">Wijaya Kesuma</p>
                                    <p class="card-text mb-1"><span id="session-job">Human Resource</span> - <span id="session-company">Gojek Indonesia</span></p>
                                    <p class="card-title d-block blue">$ 20</p>
                                </div>
                                <div class="col-12 mt-4 d-flex justify-content-center">
                                    <div class="btn btn-primary justify-content-end">
                                        <div id="editProfile" class="btn-icon-text-box">
                                            <a href="#">Apply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mt-4">
                        <a href="<?= site_url('talent/session/profile') ?>">
                            <div class="row justify-content-center">
                                <div class="col-12 card-profile-img-box">
                                    <div class="card-img-circle">
                                        <img src="<?= base_url('assets/img/session-3.png') ?>" class="card-img-circle card-img no-border" alt="person picture">
                                    </div>
                                </div>
                                <div class="col-12 card-text-box text-center">
                                    <p class="card-title d-block blue mb-1 mt-2">Wijaya Kesuma</p>
                                    <p class="card-text mb-1"><span id="session-job">Human Resource</span> - <span id="session-company">Gojek Indonesia</span></p>
                                    <p class="card-title d-block blue">$ 20</p>
                                </div>
                                <div class="col-12 mt-4 d-flex justify-content-center">
                                    <div class="btn btn-primary justify-content-end">
                                        <div id="editProfile" class="btn-icon-text-box">
                                            <a href="#">Apply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mt-4">
                        <a href="<?= site_url('talent/session/profile') ?>">
                            <div class="row justify-content-center">
                                <div class="col-12 card-profile-img-box">
                                    <div class="card-img-circle">
                                        <img src="<?= base_url('assets/img/session-3.png') ?>" class="card-img-circle card-img no-border" alt="person picture">
                                    </div>
                                </div>
                                <div class="col-12 card-text-box text-center">
                                    <p class="card-title d-block blue mb-1 mt-2">Wijaya Kesuma</p>
                                    <p class="card-text mb-1"><span id="session-job">Human Resource</span> - <span id="session-company">Gojek Indonesia</span></p>
                                    <p class="card-title d-block blue">$ 20</p>
                                </div>
                                <div class="col-12 mt-4 d-flex justify-content-center">
                                    <div class="btn btn-primary justify-content-end">
                                        <div id="editProfile" class="btn-icon-text-box">
                                            <a href="#">Apply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('_partials/js.php') ?>
    <?php $this->load->view('_partials/popover_navbar_talent.php') ?>
</body>

</html>