<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body class="white">
    <?php $this->load->view('_partials/company_navbar_overflow.php') ?>
    <section id="companyPostProject" class="card-section talent-bio company-post-project">
        <div class="container">
            <div class="card w-100">
                <div class="card-body row">
                    <div class="col-12">
                        <div class="card-text-box">
                            <p class="card-title d-block blue mb-4 text-center">Build your team with qualified talents</p>
                            <form action="<?= site_url('company') ?>">
                                <div class="form-group">
                                    <label class="card-text ml-3" for="projectName">Name a Project</label>
                                    <input placeholder="Name a Project" type="text" class="form-control input-project input-project mr-auto ml-auto mr-lg-0 ml-lg-0" id="projectName" aria-describedby="projectName" required>
                                </div>
                                <div class="form-group">
                                    <label class="card-text ml-3" for="projectDesc">Descripble More</label>
                                    <textarea class="form-control input-project mr-auto ml-auto mr-lg-0 ml-lg-0" id="projectDesc" placeholder="Max 300 Character" required rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="card-text ml-3" for="projectSalery">Salery</label>
                                    <input placeholder="Salery" type="text" class="form-control input-project mr-auto ml-auto mr-lg-0 ml-lg-0" id="projectSalery" aria-describedby="projectSalery" required>
                                </div>
                                <div class="form-group">
                                    <label class="card-text ml-3" for="ProjectNeeded">Skill Needed for The Project</label>
                                    <div class="form-control card-item-box">
                                        <div class="activity-skills d-flex align-items-center flex-wrap">
                                            <div class="card-item card-item-remove mb-2 mb-md-0 d-inline-block">
                                                Graphic Designer
                                                <span class="icon-remove"></span>
                                            </div>
                                            <div class="card-item card-item-remove mb-2 mb-md-0 d-inline-block">
                                                UI Designer
                                                <span class="icon-remove"></span>
                                            </div>
                                            <div class="card-item card-item-add mb-2 mb-md-0 d-inline-block" data-toggle="modal" data-target="#modal3">
                                                <span class="icon-add"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mr-auto ml-auto mt-4 d-flex justify-content-center align-items-center">Post Project</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Add Skill -->
    <div class="modal modal-add-skill fade" id="modal3" tabindex="-1" aria-labelledby="modal3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <section class="card-section talent-file">
                    <div class="container">
                        <div class="card w-100 card-no-border">
                            <div class="card-text-box d-flex justify-content-center align-items-center mb-2">
                                <p class="card-title d-block blue mb-0 mr-auto">Add Your Skill</p>
                                <div class="card-btn-box d-flex justify-content-center align-items-center">
                                    <div class="btn btn-option btn-primary d-flex align-items-center justify-content-center mr-2 white" onclick="hide_modal3();">
                                        <a class="text-decoration-none" href="#">Cancel</a>
                                    </div>
                                    <div class="btn btn-option btn-primary d-flex align-items-center justify-content-center" onclick="hide_modal3();">
                                            <a href="#">Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <input type="text" class="form-control input-skill mt-3" id="inputSkill" aria-describedby="inputSkill" placeholder="Input Your Skill">
                            <div class="card-section mt-3 mb-1">
                                <div class="card w-100 pt-0 pb-0 mb-3">
                                    <div class="card-body row">
                                        <div class="col-md-12">
                                            <div class="card-desc-title">Recomendation</div>
                                            <div class="activity-skills d-flex flex-wrap">
                                                <div class="card-item item-grey mb-2 d-flex align-items-center"><span>Graphic Designer</span></div>
                                                <div class="card-item item-grey mb-2 d-flex align-items-center"><span>UI Designer</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-text-box d-flex justify-content-center align-items-center mb-2 row">
                                <div class="col-12">
                                    <div class="card-subtitle mb-1">Your Skill</div>
                                </div>
                                <div class="col-12">
                                    <div class="activity-skills d-flex flex-wrap">
                                        <div class="card-item item-blue mb-2 d-flex align-items-center">
                                            <p class="mb-0">Graphic Designer</p>
                                            <div class="icon-remove">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="card-item item-blue mb-2 d-flex align-items-center">
                                            <p class="mb-0">UI Designer</p>
                                            <div class="icon-remove">
                                                <span></span>
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

    <?php $this->load->view('_partials/js.php') ?>
    <?php $this->load->view('_partials/popover_navbar_company.php') ?>
    <script>    
        function hide_modal3() {
            $('#modal3').trigger('click');
        }
    </script>
</body>

</html>