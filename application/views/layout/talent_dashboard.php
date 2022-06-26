<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('_partials/talent_navbar_overflow.php') ?>
    <section id="talentDashboard" class="card-section talent-dashboard">
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
                                    <div class="card-btn-box col-2 ml-2">
                                        <button type="submit" class="btn btn-primary btn-search">GO</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <section class="card-section talent-file talent-activity">
                        <div class="container p-0">
                            <div class="card w-100 card-no-border p-0">
                                <div class="card-section card-click mt-4 mb-0">
                                    <a href="<?= site_url('talent/job-description') ?>">
                                        <div class="card w-100 pt-0 pb-0">
                                            <div class="card-body row no-gutters">
                                                <div class="col-12 col-sm-6 col-md-3 col-lg-2 order-1 order-md-1 d-flex align-items-center justify-content-center">
                                                    <div class="card-profile-img-box">
                                                        <div class="card-img-circle">
                                                            <div class="card-img-circle card-img no-border">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-8 order-3 order-md-2 justify-content-center text-center text-sm-left">
                                                    <div class="card-text-box">
                                                        <p class="card-title d-block blue no-underline mb-2">CompanyName</p>
                                                        <p class="card-subtitle d-block blue no-underline mb-2">
                                                            <span>Project Title</span>
                                                            -
                                                            <span>Description about the jobs</span>
                                                        </p>
                                                        <div class="activity-skills">
                                                            <div class="card-item d-inline-block">Figma</div>
                                                            <div class="card-item d-inline-block">Web Developer</div>
                                                            <div class="card-item d-inline-block">Back-End</div>
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
                                <div class="card-section card-click mt-4 mb-0">
                                    <a href="<?= site_url('talent/job-description') ?>">
                                        <div class="card w-100 pt-0 pb-0">
                                            <div class="card-body row no-gutters">
                                                <div class="col-12 col-sm-6 col-md-3 col-lg-2 order-1 order-md-1 d-flex align-items-center justify-content-center">
                                                    <div class="card-profile-img-box">
                                                        <div class="card-img-circle">
                                                            <div class="card-img-circle card-img no-border">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-8 order-3 order-md-2 justify-content-center text-center text-sm-left">
                                                    <div class="card-text-box">
                                                        <p class="card-title d-block blue no-underline mb-2">CompanyName</p>
                                                        <p class="card-subtitle d-block blue no-underline mb-2">
                                                            <span>Project Title</span>
                                                            -
                                                            <span>Description about the jobs</span>
                                                        </p>
                                                        <div class="activity-skills">
                                                            <div class="card-item d-inline-block">Figma</div>
                                                            <div class="card-item d-inline-block">Web Developer</div>
                                                            <div class="card-item d-inline-block">Back-End</div>
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
                                <div class="card-section card-click mt-4 mb-0">
                                    <a href="<?= site_url('talent/job-description') ?>">
                                        <div class="card w-100 pt-0 pb-0">
                                            <div class="card-body row no-gutters">
                                                <div class="col-12 col-sm-6 col-md-3 col-lg-2 order-1 order-md-1 d-flex align-items-center justify-content-center">
                                                    <div class="card-profile-img-box">
                                                        <div class="card-img-circle">
                                                            <div class="card-img-circle card-img no-border">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-8 order-3 order-md-2 justify-content-center text-center text-sm-left">
                                                    <div class="card-text-box">
                                                        <p class="card-title d-block blue no-underline mb-2">CompanyName</p>
                                                        <p class="card-subtitle d-block blue no-underline mb-2">
                                                            <span>Project Title</span>
                                                            -
                                                            <span>Description about the jobs</span>
                                                        </p>
                                                        <div class="activity-skills">
                                                            <div class="card-item d-inline-block">Figma</div>
                                                            <div class="card-item d-inline-block">Web Developer</div>
                                                            <div class="card-item d-inline-block">Back-End</div>
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
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('_partials/js.php') ?>
    <?php $this->load->view('_partials/popover_navbar_talent.php') ?>
</body>

</html>