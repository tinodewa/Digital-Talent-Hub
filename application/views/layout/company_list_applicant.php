<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body class="white">
    <?php $this->load->view('_partials/company_navbar_overflow.php') ?>
    <section id="talentDashboard" class="card-section talent-dashboard">
        <div class="container">
            <div class="card w-100 p-0 p-sm-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            List Applicant
                        </div>
                    </div>
                    <section class="card-section talent-file talent-activity company-applicant">
                        <div class="container p-0">
                            <div class="card w-100 card-no-border p-0">
                                <div class="card-section mt-4 mb-0">
                                    <div class="card w-100 pt-0 pb-0">
                                        <div class="card-body row no-gutters">
                                            <div class="col-12 col-sm-12 col-md-3 col-lg-2  d-flex align-items-center justify-content-center">
                                                <div class="card-profile-img-box">
                                                    <div class="card-img-circle">
                                                        <div class="card-img-circle card-img no-border">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-7 mt-2 mt-md-0 justify-content-center text-center text-sm-left">
                                                <div class="card-text-box">
                                                    <p class="card-title d-block blue no-underline mb-2">talent Name</p>
                                                    <div class="activity-skills">
                                                        <div class="card-item d-inline-block">Figma</div>
                                                        <div class="card-item d-inline-block">Web Developer</div>
                                                        <div class="card-item d-inline-block">Back-End</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2 mt-md-0 d-flex align-items-center justify-content-center">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-xl-6 m-0 d-flex justify-content-center">
                                                        <a href="<?= site_url('company/project/applicant/profile') ?>" class="btn btn-primary btn-list-apply mb-0 d-flex justify-content-center align-items-center text-decoration-none">
                                                            <div id="editProfile" class="btn-icon-text-box">
                                                                Details
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-12 col-xl-6 d-flex justify-content-center align-items-center mt-2 mt-xl-0">
                                                        <div class="activity-status accepted m-0">
                                                            <div>Accepted</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-section mt-4 mb-0">
                                    <div class="card w-100 pt-0 pb-0">
                                        <div class="card-body row no-gutters">
                                            <div class="col-12 col-sm-12 col-md-3 col-lg-2  d-flex align-items-center justify-content-center">
                                                <div class="card-profile-img-box">
                                                    <div class="card-img-circle">
                                                        <div class="card-img-circle card-img no-border">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-7 mt-2 mt-md-0 justify-content-center text-center text-sm-left">
                                                <div class="card-text-box">
                                                    <p class="card-title d-block blue no-underline mb-2">talent Name</p>
                                                    <div class="activity-skills">
                                                        <div class="card-item d-inline-block">Figma</div>
                                                        <div class="card-item d-inline-block">Web Developer</div>
                                                        <div class="card-item d-inline-block">Back-End</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2 mt-md-0 d-flex align-items-center justify-content-center">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-xl-6 m-0 d-flex justify-content-center">
                                                        <a href="<?= site_url('company/project/applicant/profile') ?>" class="btn btn-primary btn-list-apply mb-0 d-flex justify-content-center align-items-center text-decoration-none">
                                                            <div id="editProfile" class="btn-icon-text-box">
                                                                Details
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-12 col-xl-6 d-flex justify-content-center align-items-center mt-2 mt-xl-0">
                                                        <div class="activity-status declined m-0">
                                                            <div>Declined</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-section mt-4 mb-0">
                                    <div class="card w-100 pt-0 pb-0">
                                        <div class="card-body row no-gutters">
                                            <div class="col-12 col-sm-12 col-md-3 col-lg-2  d-flex align-items-center justify-content-center">
                                                <div class="card-profile-img-box">
                                                    <div class="card-img-circle">
                                                        <div class="card-img-circle card-img no-border">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-7 mt-2 mt-md-0 justify-content-center text-center text-sm-left">
                                                <div class="card-text-box">
                                                    <p class="card-title d-block blue no-underline mb-2">talent Name</p>
                                                    <div class="activity-skills">
                                                        <div class="card-item d-inline-block">Figma</div>
                                                        <div class="card-item d-inline-block">Web Developer</div>
                                                        <div class="card-item d-inline-block">Back-End</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2 mt-md-0 d-flex align-items-center justify-content-center">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-xl-6 m-0 d-flex justify-content-center">
                                                        <a href="<?= site_url('company/project/applicant/profile') ?>" class="btn btn-primary btn-list-apply mb-0 d-flex justify-content-center align-items-center text-decoration-none">
                                                            <div id="editProfile" class="btn-icon-text-box">
                                                                Details
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-12 col-xl-6 d-flex justify-content-center align-items-center mt-2 mt-xl-0">
                                                        <div class="col-6 col-xl-3 d-flex justify-content-end p-0 mt-2 mt-xl-0 mr-xl-1">
                                                            <div type="button"
                                                                class="card-item card-item-accept mb-2 mb-md-0 mr-1 d-inline-block"
                                                                data-toggle="modal" data-target="#modal1">
                                                                <span class="icon-accept"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-xl-3 p-0 mt-2 mt-xl-0 d-flex">
                                                            <div type="button"
                                                                class="card-item card-item-remove remove-red mb-2 ml-1 mb-md-0 d-inline-block"
                                                                data-toggle="modal" data-target="#modal2">
                                                                <span class="icon-remove"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Accept -->
    <div class="modal modal-delete-file fade" id="modal1" tabindex="-1" aria-labelledby="modal1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <section class="card-section talent-file">
                    <div class="container">
                        <div class="card w-100 card-no-border">
                            <div class="card-text-box mb-2">
                                <p class="card-title d-block blue mb-0">Accept</p>
                                <p class="card-text">Are your sure want to Accept</p>
                                <div class="card-btn-box d-flex">
                                    <div onclick="hide_modal1();"
                                        class="btn btn-option btn-primary d-flex align-items-center justify-content-center mr-auto white text-decoration-none">
                                        <a class="text-decoration-none" href="#">Cancel</a>
                                    </div>
                                    <div onclick="hide_modal1();"
                                        class="btn btn-option btn-primary d-flex align-items-center justify-content-center">
                                        <a href="#">Accept</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Modal Decline -->
    <div class="modal modal-delete-file fade" id="modal2" tabindex="-1" aria-labelledby="modal2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <section class="card-section talent-file">
                    <div class="container">
                        <div class="card w-100 card-no-border">
                            <div class="card-text-box mb-2">
                                <p class="card-title d-block blue mb-0">Decline</p>
                                <p class="card-text">Are your sure want to decline?</p>
                                <div class="card-btn-box d-flex">
                                    <div onclick="hide_modal2();"
                                        class="btn btn-option btn-primary d-flex align-items-center justify-content-center mr-auto white text-decoration-none">
                                        <a class="text-decoration-none" href="#">Cancel</a>
                                    </div>
                                    <div onclick="hide_modal2();"
                                        class="btn btn-option btn-primary d-flex align-items-center justify-content-center">
                                        <a href="#">Declined</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <?php $this->load->view('_partials/js.php') ?>
    <?php $this->load->view('_partials/popover_navbar_company.php') ?>
    <script>   
        function hide_modal1() {
            $('#modal1').trigger('click');
        } 
        function hide_modal2() {
            $('#modal2').trigger('click');
        }
    </script>
</body>

</html>