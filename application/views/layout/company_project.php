<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body class="white">
    <?php $this->load->view('_partials/company_navbar_overflow.php') ?>
    <section id="companyProject" class="card-section talent-bio">
        <div class="container">
            <div class="card w-100">
                <div class="card-body row">
                    <div class="col-12">
                        <a href="<?= site_url('company/project/applicant') ?>" class="btn btn-primary btn-list-apply d-flex justify-content-center align-items-center mt-4 mt-lg-0 text-decoration-none">
                            <div id="editProfile" class="btn-icon-text-box">
                                List Applicant
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="card-text-box">
                            <p class="card-text mt-3 mt-lg-4 mb-3 mb-lg-5">#AD230</p>
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
                            <div class="btn btn-primary justify-content-end w-100 mt-4 mt-lg-0">
                                <div id="editProfile" class="btn-icon-text-box" onclick="edit_project();">
                                    <a href="#">Edit Project</a>
                                </div>
                            </div>
                            <div class="btn btn-primary justify-content-end w-100">
                                <div id="editProfile" class="btn-icon-text-box">
                                    <a href="<?= site_url('company') ?>" class="text-decoration-none">Back to Dashboard</a>
                                </div>
                            </div>
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
    <section id="companyProjectEdit" class="card-section talent-bio company-edit-project d-none">
        <div class="container">
            <div class="card w-100">
                <div class="card-body row">
                    <div class="col-12 col-lg-9">
                        <div class="card-text-box">
                            <p class="card-text mt-3 mt-lg-4 mb-3 mb-lg-5">#AD230</p>
                            <div class="form-group mb-2">
                                <input placeholder="Project name" type="text" class="form-control input-project-name" id="talentName"
                                    aria-describedby="talentName">
                            </div>
                            <div class="form-group mb-2">
                                <textarea placeholder="Bio" class="form-control" id="talentBio" rows="3"
                                    aria-describedby="talentBio"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-control card-item-box">
                                    <div class="activity-skills d-flex align-items-center flex-wrap">
                                        <div class="card-item card-item-remove mb-2 mb-md-0 d-inline-block">
                                            Skill
                                            <span class="icon-remove"></span>
                                        </div>
                                        <input placeholder="ex:  react" type="text" class="form-control d-inline-block w-auto input-add-skill input-project mr-auto ml-auto mr-lg-0 ml-lg-0" id="ProjectNeeded" aria-describedby="ProjectNeeded" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="m-auto">
                            <div class="btn btn-primary justify-content-end w-100 mt-4 mt-lg-0">
                                <div id="editProfile" class="btn-icon-text-box" onclick="close_edit_project();">
                                    <a href="#" class="text-decoration-none">Save</a>
                                </div>
                            </div>
                            <div class="btn btn-primary justify-content-end w-100 white"
                                    onclick="close_edit_project();"><a href="#">Cancel</a>
                                </div>
                            <div class="card-text-box text-center">                                
                                <div class="form-group">
                                    <label class="card-text" for="projectSalary">Salary</label>
                                    <input placeholder="10" type="text" class="form-control input-project input-project mr-auto ml-auto mr-lg-0 ml-lg-0" id="projectSalary" aria-describedby="projectSalary" required>
                                </div>
                                <div class="form-group">
                                    <label class="card-text" for="projectRegistration">Registration</label>
                                    <input placeholder="1 May - 1 June" type="text" class="form-control input-project input-project mr-auto ml-auto mr-lg-0 ml-lg-0" id="projectRegistration" aria-describedby="projectRegistration" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('_partials/js.php') ?>
    <?php $this->load->view('_partials/popover_navbar_company.php') ?>
    <script>
        function edit_project() {
            var project = document.getElementById("companyProject");
            var editProject = document.getElementById("companyProjectEdit");
            project.classList.add("d-none");
            editProject.classList.remove("d-none");
        }
        function close_edit_project() {
            var project = document.getElementById("companyProject");
            var editProject = document.getElementById("companyProjectEdit");
            project.classList.remove("d-none");
            editProject.classList.add("d-none");
        }
    </script>
</body>

</html>