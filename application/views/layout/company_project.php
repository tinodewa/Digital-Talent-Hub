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
                            <p class="card-text mt-3 mt-lg-4 mb-3 mb-lg-5">#<?= $data_detail_project['ID_PROJECT']; ?></p>
                            <p class="card-title d-block blue mb-4 text-justify"><?= $data_detail_project['NAMA_PROJECT']; ?></p>
                            <p class="card-text"><?= $data_detail_project['DESC_PROJECT']; ?></p>
                            <div class="activity-skills">
                                <?php foreach ($data_detail_project['SKILL_PROJECT'] as $SkillItem) {
                                    echo '<div class="card-item d-inline-block">' . $SkillItem['NAMA_SKILL'] . '</div>';
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="m-auto">
                            <div class="btn btn-primary justify-content-end w-100 mt-4 mt-lg-0">
                                <div id="editProfile" class="btn-icon-text-box" onclick="edit_project();">
                                    Edit Project
                                </div>
                            </div>
                            <div class="btn btn-primary justify-content-end w-100">
                                <div id="editProfile" class="btn-icon-text-box">
                                    <a href="<?= site_url('company') ?>" class="text-decoration-none">Back to Dashboard</a>
                                </div>
                            </div>
                            <div class="card-text-box text-center">
                                <p class="card-title d-block blue mb-4 mt-2">$<?= $data_detail_project['SALARY_PROJECT']; ?></p>
                                <p class="card-text mb-2">Registration</p>
                                <p class="card-text mb-0"><?php if ($data_detail_project['REGIST_PROJECT'] != "") {
                                                                echo $data_detail_project['REGIST_PROJECT'];
                                                            } else {
                                                                echo "-";
                                                            } ?></p>
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
                <form class="card-body row" action="<?= base_url('company/project/' . $data_detail_project['ID_PROJECT']); ?>" method="POST">
                    <div class="col-12 col-lg-9">
                        <div class="card-text-box">
                            <p class="card-text mt-3 mt-lg-4 mb-3 mb-lg-5">#<?= $data_detail_project['ID_PROJECT']; ?></p>
                            <div class="form-group mb-2">
                                <input placeholder="Project name" type="text" class="form-control input-project-name" id="talentName" aria-describedby="talentName" name="projectName" value="<?= $data_detail_project['NAMA_PROJECT']; ?>" required>
                            </div>
                            <div class="form-group mb-2">
                                <textarea placeholder="Bio" class="form-control" id="talentBio" rows="3" aria-describedby="talentBio" name="projectDesc" required><?= $data_detail_project['DESC_PROJECT']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <select class="form-control card-item-box js-example-basic-multiple" name="skill[]" multiple="multiple" style="width: 100%;">
                                    <?php
                                    foreach ($skill as $dataSkill) { ?>
                                        <option class="card-item card-item-remove mb-2 mb-md-0 d-inline-block" value="<?= $dataSkill->id_skill; ?>" <?php
                                                                                                                                                    foreach ($data_detail_project['SKILL_PROJECT'] as $SkillItem) {
                                                                                                                                                        if ($dataSkill->id_skill == $SkillItem['ID_SKILL']) {
                                                                                                                                                            echo 'selected';
                                                                                                                                                        }
                                                                                                                                                    }
                                                                                                                                                    ?>>
                                            <?= $dataSkill->nama_skill; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="m-auto">
                            <button type="submit" class="btn btn-primary justify-content-end w-100 mt-4 mt-lg-0">
                                <div class="btn-icon-text-box">
                                    Save
                                </div>
                            </button>
                            <div class="btn btn-primary justify-content-end w-100 white" onclick="close_edit_project();"><a href="">Cancel</a>
                            </div>
                            <div class="card-text-box text-center">
                                <div class="form-group">
                                    <label class="card-text" for="projectSalary">Salary</label>
                                    <input placeholder="10" type="text" class="form-control input-project input-project mr-auto ml-auto mr-lg-0 ml-lg-0" id="projectSalary" aria-describedby="projectSalary" name="projectSalary" value="<?= $data_detail_project['SALARY_PROJECT']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="card-text" for="projectRegistration">Registration</label>
                                    <input placeholder="1 May - 1 June" type="text" class="form-control input-project input-project mr-auto ml-auto mr-lg-0 ml-lg-0" id="projectRegistration" aria-describedby="projectRegistration" name="projectRegistration" value="<?php if ($data_detail_project['REGIST_PROJECT'] != "") {
                                                                                                                                                                                                                                                                            echo $data_detail_project['REGIST_PROJECT'];
                                                                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                                                                            echo "-";
                                                                                                                                                                                                                                                                        } ?>" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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

        $("#editProfile").click(function() {
            $("#CompanyEdit").submit();
        });

        $('.js-example-basic-multiple').select2({
            placeholder: 'Select Skill'
        });

        function hide_modal3() {
            $('#modal3').trigger('click');
        }
    </script>
</body>

</html>