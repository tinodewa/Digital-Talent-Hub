<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('_partials/talent_navbar.php') ?>
    <section id="talentBio" class="card-section talent-bio session-profile">
        <div class="container">
            <div class="card w-100">
                <div class="card-body row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card-profile-img-box">
                                    <div class="card-img-circle">
                                        <img src="<?= base_url('assets/img/experience.png') ?>" class="card-img-circle card-img" alt="person picture"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card-text-box">
                                    <p class="card-title d-block blue mb-2">Wijaya Kesuma</p>
                                    <div class="card-icon-box d-inline-block"><span class="whatsapp"></span></div>
                                    <div class="card-icon-box  d-inline-block"><span class="gmail"></span></div>
                                    <div class="card-icon-box  d-inline-block"><span class="website"></span></div>
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
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="m-auto">
                            <a href="#" class="btn btn-primary d-flex justify-content-center align-items-center w-100 text-decoration-none">
                                <div id="editProfile" class="btn-icon-text-box">
                                    Make Appointment
                                </div>
                            </a>
                            <p class="card-title d-block blue mb-2 text-center">$ 20</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="card-section talent-file session-course">
        <div class="container">
            <div class="card w-100 card-no-border">
                <div class="card-text-box">
                    <p class="card-title d-block blue no-underline mb-0">Course - Human Resource</p>
                    <p class="card-text d-block mb-2">Session Sequence</p>
                </div>
                <div class="divider"></div>
                <div class="row mt-2">
                    <div class="col-12 col-lg-6 course-list">
                        <div class="row no-gutters">
                            <div class="col-1 d-flex flex-column align-items-center">
                                <div class="course-circle"></div>
                                <div class="course-bar"></div>
                            </div>
                            <div class="col-11">
                                <p class="m-0 course-title"><span class="bold">Introduction</span> (1 Days)</p>
                                <p class="course-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-1 d-flex flex-column align-items-center">
                                <div class="course-circle"></div>
                                <div class="course-bar"></div>
                            </div>
                            <div class="col-11">
                                <p class="m-0 course-title"><span class="bold">How To</span> (2 Days)</p>
                                <p class="course-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-1 d-flex flex-column align-items-center">
                                <div class="course-circle"></div>
                                <div class="course-bar"></div>
                            </div>
                            <div class="col-11">
                                <p class="m-0 course-title"><span class="bold">Implementation</span> (1 Days)</p>
                                <p class="course-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="card-section talent-file session-course session-experience">
        <div class="container">
            <div class="card w-100 card-no-border">
                <div class="card-text-box">
                    <p class="card-title d-block blue no-underline mb-0">Experience</p>
                    <p class="card-text d-block mb-2">Professional Experience Record</p>
                </div>
                <div class="divider"></div>
                <div class="row mt-2">
                    <div class="col-12 col-lg-6 course-list">
                        <div class="row no-gutters">
                            <div class="col-1 d-flex flex-column align-items-center">
                                <div class="course-circle"></div>
                                <div class="course-bar"></div>
                            </div>
                            <div class="col-11">
                                <p class="m-0 course-title"><span class="bold">Human Research Department</span> (2021 - Now)</p>
                                <p class="m-0 course-text">Gojek Indonesia</p>
                                <p class="course-subtext">Jakarta, Indonesia</p>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-1 d-flex flex-column align-items-center">
                                <div class="course-circle"></div>
                                <div class="course-bar"></div>
                            </div>
                            <div class="col-11">
                                <p class="m-0 course-title"><span class="bold">Human Research Department</span> (2019 - 2021)</p>
                                <p class="m-0 course-text">Ruang Guru</p>
                                <p class="course-subtext">Jakarta, Indonesia</p>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-1 d-flex flex-column align-items-center">
                                <div class="course-circle"></div>
                                <div class="course-bar"></div>
                            </div>
                            <div class="col-11">
                                <p class="m-0 course-title"><span class="bold">Human Research Department</span> (2018 - 2019)</p>
                                <p class="m-0 course-text">Indofood Indonesia</p>
                                <p class="course-subtext">Jakarta, Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="course-see-more text-center mt-3" href="#">See more ></a>
            </div>
        </div>
    </section>

    <?php $this->load->view('_partials/js.php') ?>
    <?php $this->load->view('_partials/popover_navbar_talent.php') ?>
</body>

</html>