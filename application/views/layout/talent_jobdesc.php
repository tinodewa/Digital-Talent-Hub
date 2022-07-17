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
                            <p class="card-text mb-3 mb-lg-5"><?= $data_detail_project['ID_PROJECT'] ?></p>
                            <p class="card-title d-block blue mb-4 text-justify"><?= $data_detail_project['NAMA_PROJECT'] ?></p>
                            <p class="card-text"><?= $data_detail_project['DESC_PROJECT'] ?></p>
                            <div class="activity-skills">
                                    <?php foreach ($data_detail_project['SKILL_PROJECT'] as $SkillItem) {
                                        echo '<div class="card-item d-inline-block">' . $SkillItem['NAMA_SKILL'] . '</div>';
                                    } ?>
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
                                <p class="card-title d-block blue mb-4 mt-2">$<?= $data_detail_project['SALARY_PROJECT'] ?></p>
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