<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('_partials/company_navbar_overflow.php') ?>
    <section id="CompanyDashboard" class="card-section talent-dashboard">
        <div class="container">
            <div class="card w-100 p-0 p-sm-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="row no-gutters d-flex justify-content-center">
                                    <div class="form-group col-8 col-md-6">
                                        <input placeholder="What are you loking for?" type="text" class="form-control input-talent" id="inputTalent" aria-describedby="inputTalent">
                                    </div>
                                    <div class="card-btn-box col-2 ml-2 mr-0 mr-md-auto">
                                        <button type="submit" class="btn btn-primary btn-search">GO</button>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="m-auto">
                                            <a href="<?= site_url('company/post-project') ?>" class="btn btn-primary w-100 d-flex justify-content-center align-items-center text-decoration-none">
                                                <div id="editProfile" class="btn-icon-text-box">
                                                    Post A Project
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <section class="card-section talent-file talent-activity">
                        <div class="container p-0">
                            <div class="card w-100 card-no-border p-0">
                                <?php foreach ($dataCompany as $item1) { ?>
                                    <div class="card-section card-click mt-4 mb-0">
                                        <a href="<?= site_url('company/project') ?>">
                                            <div class="card w-100 pt-0 pb-0">
                                                <div class="card-body row no-gutters">
                                                    <div class="col-12 col-sm-6 col-md-3 col-lg-2 order-1 order-md-1 d-flex align-items-center justify-content-center">
                                                        <div class="card-profile-img-box">
                                                            <div class="card-img-circle">
                                                                <!-- new -->
                                                                <img src="<?php echo $item1['PICT_PROJECT']; ?>" class="card-img-circle card-img no-border" alt="person picture">
                                                                <!-- old -->
                                                                <!-- <img style="background-image: url(<?php echo $item1['PICT_PROJECT']; ?>);" class="card-img-circle card-img no-border"/> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-6 col-lg-8 order-3 order-md-2 justify-content-center text-center text-sm-left">
                                                        <div class="card-text-box">
                                                            <p class="card-title d-block blue no-underline mb-2"><?php echo $item1['NAMA_COMPANY']; ?></p>
                                                            <p class="card-subtitle d-block blue no-underline mb-2">
                                                                <span><?php echo $item1['NAMA_PROJECT']; ?></span>
                                                                -
                                                                <span><?php echo $item1['DESC_PROJECT']; ?></span>
                                                            </p>
                                                            <div class="activity-skills">
                                                                <?php foreach ($item1['SKILL_PROJECT'] as $item2) { ?>
                                                                    <div class="card-item d-inline-block"><?php echo $item2['NAMA_SKILL']; ?></div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 col-md-3 col-lg-2 order-2 order-md-3 d-flex align-items-center justify-content-center">
                                                        <p class="card-title d-block blue no-underline mb-0">10$</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('_partials/js.php') ?>
    <?php $this->load->view('_partials/popover_navbar_company.php') ?>
</body>

</html>