<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body class="white">
    <?php $this->load->view('_partials/talent_navbar_overflow.php') ?>
    <section id="talentBio" class="card-section talent-bio">
        <div class="container">
            <div class="card w-100">
                <div class="card-body row">
                    <div class="col-12 col-lg-9">
                        <div class="card-text-box">
                            <p class="card-text mb-3 mb-lg-5">#AD230</p>
                            <p class="card-title d-block blue mb-4 text-justify">UI Designer</p>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                ever since the 1500s, when an -unknown printer took a galley of type and
                                scrambled it to make a type specimen book</p>
                            <div class="activity-skills">
                                <div class="card-item d-inline-block">Figma</div>
                                <div class="card-item d-inline-block">Web Developer</div>
                                <div class="card-item d-inline-block">Back-End</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="m-auto">
                            <a href="#" class="btn btn-primary justify-content-end w-100 mt-4 mt-lg-0 d-flex justify-content-center align-items-center">
                                <div id="editProfile" class="btn-icon-text-box">
                                    Apply
                                </div>
                            </a>
                            <a href="<?= site_url('talent') ?>" class="btn btn-primary d-flex justify-content-center align-items-center w-100 text-decoration-none">
                                <div id="editProfile" class="btn-icon-text-box">
                                    Back to Dashboard
                                </div>
                            </a>
                            <div class="card-text-box text-center">
                                <p class="card-title d-block blue mb-4 mt-2">$10</p>
                                <p class="card-text mb-2">Registration</p>
                                <p class="card-text mb-0">1 May - 1 June</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('_partials/js.php') ?>
    <?php $this->load->view('_partials/popover_navbar_talent.php') ?>
</body>

</html>