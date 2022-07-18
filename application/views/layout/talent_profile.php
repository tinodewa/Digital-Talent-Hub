<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('_partials/talent_navbar.php') ?>
    <section id="talentBio" class="card-section talent-bio">
        <div class="container">
            <div class="card w-100">
                <div class="card-body row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-3">
                                <input class="d-none" type="file" class="form-control-file" id="ImgUpload">
                                <div class="card-profile-img-box">
                                    <div class="card-img-circle">
                                        <!-- new -->
                                        <img src="<?= $ProfileTal->profile_pict_talent; ?>" class="card-img-circle card-img" alt="person picture">
                                            <div id="OpenImgUpload" class="card-img-subicon" onclick="search_image();">
                                                <img src="<?= base_url('assets/img/icon_camera.png') ?>" alt="icon_camera">
                                            </div>
                                        </img>
                                        <!-- old -->
                                        <!-- <div class="card-img-circle card-img">
                                            <div id="OpenImgUpload" class="card-img-subicon" onclick="search_image();">
                                                <img src="<?= base_url('assets/img/icon_camera.png') ?>" alt="icon_camera">
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card-text-box">
                                    <p class="card-title d-block blue mb-2"><?= $ProfileTal->nama_talent; ?></p>
                                    <div class="card-icon-box d-inline-block"><span class="whatsapp"></span></div>
                                    <div class="card-icon-box  d-inline-block"><span class="gmail"></span></div>
                                    <div class="card-icon-box  d-inline-block"><span class="website"></span></div>
                                    <p class="card-text"><?= $ProfileTal->summary_talent; ?></p>
                                    <div class="activity-skills">
                                        <?php foreach ($SKILL_TALENT as $item2) { ?>
                                            <div class="card-item d-inline-block"><?= $item2['NAMA_SKILL']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="m-auto">
                            <div class="btn btn-primary justify-content-end w-100">
                                <div id="editProfile" class="btn-icon-text-box" onclick="edit_profile();">
                                    <span class="icon-edit"></span><a href="#">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="talentBioEdit" class="card-section talent-bio talent-bio-edit d-none">
        <div class="container">
            <div class="card w-100">
                <form action="<?= base_url('talent/profile'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 d-flex justify-content-center">
                                    <div class="card-profile-img-box" id="ImageShow">
                                        <div class="card-img-circle">
                                            <div class="card-img-circle card-img">
                                                <img src="<?= $ProfileTal->profile_pict_talent; ?>" class="card-img-circle card-img" alt="user picture" onerror="this.src='<?= base_url('assets/img/iconmonstr_user.png') ?>'">
                                            </div>
                                            <div class="btn btn-primary justify-content-end w-100 white mt-2" onclick="open_input();"><a class="text-decoration-none">Change</a></div>
                                        </div>
                                    </div>

                                    <div class="d-none card-profile-img-box" id="ImageInput">
                                        <div class="card-img-circle">
                                            <div class="card-img-circle card-img">
                                                <input type="file" accept="image/*" class="form-control-file dropify" id="ImgUpload" data-height="140" name="ImgUpload">
                                            </div>
                                            <div class="btn btn-primary justify-content-end w-100 white mt-2" onclick="close_input();"><a class="text-decoration-none">Cancel</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="card-text-box">
                                        <div class="form-group mb-1">
                                            <input placeholder="Name" type="text" class="form-control" id="talentName"
                                                aria-describedby="talentName" name="talentName" value="<?= $ProfileTal->nama_talent; ?>">
                                        </div>
                                        <div class="form-group mb-1">
                                            <input placeholder="Email" type="email" class="form-control" id="talentEmail"
                                                aria-describedby="talentEmail" name="talentEmail" value="<?= $ProfileTal->email_talent; ?>">
                                        </div>
                                        <div class="form-group mb-1">
                                            <textarea placeholder="Bio" class="form-control" id="talentBio" rows="3"
                                                aria-describedby="talentBio" name="talentBio" ><?= $ProfileTal->summary_talent; ?></textarea>
                                        </div>
                                        <div class="form-group mb-1">
                                            <div class="form-control card-item-box">
                                                <div class="activity-skills d-flex align-items-center flex-wrap">
                                                    <div class="card-item card-item-remove mb-2 mb-md-0 d-inline-block">
                                                        Figma
                                                        <span class="icon-remove"></span>
                                                    </div>
                                                    <div class="card-item card-item-remove mb-2 mb-md-0 d-inline-block">
                                                        Web Developer
                                                        <span class="icon-remove"></span>
                                                    </div>
                                                    <div class="card-item card-item-remove mb-2 mb-md-0 d-inline-block">
                                                        Back-End
                                                        <span class="icon-remove"></span>
                                                    </div>
                                                    <div class="card-item card-item-add mb-2 mb-md-0 d-inline-block" data-toggle="modal" data-target="#modal3">
                                                        <span class="icon-add"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="m-auto">
                                <button type="submit" class="btn btn-primary justify-content-end w-100">
                                    <div class="btn-icon-text-box">
                                        Save
                                    </div>
                                </button>
                                <div class="btn btn-primary justify-content-end w-100 white" onclick="close_edit_profile();"><a class="text-decoration-none">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="card-section talent-file">
        <div class="container">
            <div class="card w-100 card-no-border">
                <div class="card-text-box">
                    <p class="card-title d-block blue no-underline mb-0">File</p>
                    <p class="card-text d-block mb-2">Your Registration File</p>
                </div>
                <div class="divider"></div>
                <div class="card-section mt-5 mb-3">
                    <div class="card w-100 pt-0 pb-0">
                        <div class="card-body row">
                            <div class="col-md-8">
                                <div class="card-text-box">
                                    <p class="card-title d-block blue no-underline mb-0">Curriculum Vitae</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="m-auto">
                                    <div type="button" class="btn btn-primary justify-content-end w-100"
                                        data-toggle="modal" data-target="#modal1">
                                        <div class="btn-icon-text-box">
                                            <span class="icon-edit"></span><a href="#">Manage</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-1 d-flex align-items-center">
                                        <img class="logo-file" src="<?= base_url('assets/img/file.png') ?>" alt="icon file">
                                    </div>
                                    <div class="col-11">
                                        <div class="card-body">
                                            <p class="card-text mb-0">CV_wijayagunawan.pdf</p>
                                            <p class="card-text">4.30Mb</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-1 d-flex align-items-center">
                                        <img class="logo-file" src="<?= base_url('assets/img/file.png') ?>" alt="icon file">
                                    </div>
                                    <div class="col-11">
                                        <div class="card-body">
                                            <p class="card-text mb-0">CV_wijayagunawan.pdf</p>
                                            <p class="card-text">4.30Mb</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-section mt-3 mb-3">
                    <div class="card w-100 pt-0 pb-0">
                        <div class="card-body row">
                            <div class="col-md-8">
                                <div class="card-text-box">
                                    <p class="card-title d-block blue no-underline mb-0">Experience</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="m-auto">
                                    <div type="button" class="btn btn-primary justify-content-end w-100"
                                        data-toggle="modal" data-target="#modal1">
                                        <div class="btn-icon-text-box">
                                            <span class="icon-edit"></span><a href="#">Manage</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-1 d-flex align-items-center">
                                        <img class="logo-file" src="<?= base_url('assets/img/file.png') ?>" alt="icon file">
                                    </div>
                                    <div class="col-11">
                                        <div class="card-body">
                                            <p class="card-text mb-0">Pertamina_wijayagunawan.pdf</p>
                                            <p class="card-text">4.30Mb</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-section mt-3 mb-2">
                    <div class="card w-100 pt-0 pb-0">
                        <div class="card-body row">
                            <div class="col-md-8">
                                <div class="card-text-box">
                                    <p class="card-title d-block blue no-underline mb-0">Certificate</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="m-auto">
                                    <div type="button" class="btn btn-primary justify-content-end w-100"
                                        data-toggle="modal" data-target="#modal1">
                                        <div class="btn-icon-text-box">
                                            <span class="icon-edit"></span><a href="#">Manage</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row no-gutters">
                                    <div class="col-1 d-flex align-items-center">
                                        <img class="logo-file" src="<?= base_url('assets/img/file.png') ?>" alt="icon file">
                                    </div>
                                    <div class="col-11">
                                        <div class="card-body">
                                            <p class="card-text mb-0">Back-end competition_wijayagunawan.pdf</p>
                                            <p class="card-text">4.30Mb</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="card-section talent-file talent-activity">
        <div class="container">
            <div class="card w-100 card-no-border">
                <div class="card-text-box">
                    <p class="card-title d-block blue no-underline mb-0">Activity</p>
                    <p class="card-text d-block mb-2">Your Recent Application</p>
                </div>
                <div class="divider"></div>
                <div class="card-section mt-4 mb-0">
                    <div class="card w-100 pt-0 pb-0">
                        <div class="card-body row no-gutters">
                            <div class="col-12 col-sm-6 col-md-3 col-lg-2 order-1 order-md-1 d-flex align-items-center justify-content-center">
                                <div class="card-profile-img-box">
                                    <div class="card-img-circle">
                                        <img src="<?= base_url('assets/img/experience.png') ?>" class="card-img-circle card-img no-border" alt="person picture">
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
                                <div class="activity-status registered m-0">
                                    <div>Registered</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-section mt-4 mb-0">
                    <div class="card w-100 pt-0 pb-0">
                        <div class="card-body row no-gutters">
                            <div class="col-12 col-sm-6 col-md-3 col-lg-2 order-1 order-md-1 d-flex align-items-center justify-content-center">
                                <div class="card-profile-img-box">
                                    <div class="card-img-circle">
                                        <img src="<?= base_url('assets/img/experience.png') ?>" class="card-img-circle card-img no-border" alt="person picture">
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
                                <div class="activity-status accepted m-0">
                                    <div>Accepted</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-section mt-4 mb-0">
                    <div class="card w-100 pt-0 pb-0">
                        <div class="card-body row no-gutters">
                            <div class="col-12 col-sm-6 col-md-3 col-lg-2 order-1 order-md-1 d-flex align-items-center justify-content-center">
                                <div class="card-profile-img-box">
                                    <div class="card-img-circle">
                                        <img src="<?= base_url('assets/img/experience.png') ?>" class="card-img-circle card-img no-border" alt="person picture">
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
                                <div class="activity-status declined m-0">
                                    <div>Declined</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="course-see-more text-center mt-3" href="#">See more ></a>
            </div>
        </div>
    </section>

    <!-- Modal File Upload -->
    <div class="modal modal-upload-file fade" id="modal1" tabindex="-1" aria-labelledby="modal1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <section class="card-section talent-file">
                    <div class="container">
                        <div class="card w-100 card-no-border">
                            <div class="card-text-box d-flex justify-content-center align-items-center mb-2">
                                <p class="card-title d-block blue mb-0 mr-auto">File Upload</p>
                                <div class="card-btn-box d-flex justify-content-center align-items-center">
                                    <div class="btn btn-option btn-primary d-flex align-items-center justify-content-center mr-2 white" onclick="hide_modal1();">
                                        <a class="text-decoration-none">Cancel</a>
                                    </div>
                                    <div class="btn btn-option btn-primary d-flex align-items-center justify-content-center" onclick="hide_modal1();">
                                            <a>Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="card-section mt-3 mb-2">
                                <input class="d-none" type="file" class="form-control-file" id="FileUpload">
                                <div class="card w-100 pt-0 pb-0 mb-3">
                                    <div class="card-body row">
                                        <div class="col-md-12">
                                            <div class="row no-gutters">
                                                <div class="col-md-1 d-flex align-items-center">
                                                    <img class="logo-file" src="<?= base_url('assets/img/file.png') ?>" alt="icon file">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="card-body">
                                                        <p class="card-text mb-0">CV_wijayagunawan.pdf</p>
                                                        <p class="card-text mb-1">4.30Mb</p>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        
                                                        <div class="card-progressbar-text-box d-flex">
                                                            <p class="mr-auto mb-0">200.5 KB of 500 KB (50% done)</p>
                                                            <p class="mb-0">870kb/sec</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 d-flex align-items-center justify-content-center">
                                                    <div class="card-item mb-2 d-inline-block">
                                                        <span class="card-item-icon cancel"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card w-100 pt-0 pb-0 mb-3">
                                    <div class="card-body row">
                                        <div class="col-md-12">
                                            <div class="row no-gutters">
                                                <div class="col-md-1 d-flex align-items-center">
                                                    <img class="logo-file" src="<?= base_url('assets/img/file.png') ?>" alt="icon file">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="card-body">
                                                        <p class="card-text mb-0">CV_wijayagunawan.pdf</p>
                                                        <p class="card-text mb-1">4.30Mb</p>
                                                        <div class="progressbar-box d-none">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            
                                                            <div class="card-progressbar-text-box d-flex">
                                                                <p class="mr-auto mb-0">200.5 KB of 500 KB (50% done)</p>
                                                                <p class="mb-0">870kb/sec</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 d-flex align-items-center justify-content-center">
                                                    <div class="card-item card-item mb-2 d-inline-block">
                                                        <span class="card-item-icon delete" data-toggle="modal" data-target="#modal2"></span>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card dashed w-100 pt-0 pb-0 mb-3">
                                    <div class="card-body row">
                                        <div class="col-md-12">
                                            <div class="row no-gutters">
                                                <div class="col-12">
                                                    <p class="card-subtitle d-block blue mb-0 text-center">
                                                        <span class="icon-upload"></span>
                                                        Drop files here to upload or <span id="OpenFileUpload" class="with-underline card-link" onclick="search_file();">choose file</span>
                                                    </p>
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

    <!-- Modal File Delete -->
    <div class="modal modal-delete-file fade" id="modal2" tabindex="-1" aria-labelledby="modal2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <section class="card-section talent-file">
                    <div class="container">
                        <div class="card w-100 card-no-border">
                            <div class="card-text-box mb-2">
                                <p class="card-title d-block blue mb-0">Delete File</p>
                                <p class="card-text">Are your sure want to delete this?</p>
                                <div class="card-btn-box d-flex">
                                    <div class="btn btn-option btn-primary d-flex align-items-center justify-content-center mr-auto white text-decoration-none" onclick="hide_modal2();">
                                        <a class="text-decoration-none">Cancel</a>
                                    </div>
                                    <div class="btn btn-option btn-primary d-flex align-items-center justify-content-center" onclick="hide_modal2();">
                                            <a>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

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
    <?php $this->load->view('_partials/popover_navbar_talent.php') ?>
    <script>
        function open_input() {
            $('#ImageShow').addClass("d-none");
            $('#ImageInput').removeClass("d-none");
        }

        function close_input() {
            $('#ImageShow').removeClass("d-none");
            $('#ImageInput').addClass("d-none");
            $(".dropify-clear").trigger("click");
        }

        function edit_profile() {
            var talent = document.getElementById("talentBio");
            var editTalent = document.getElementById("talentBioEdit");
            talent.classList.add("d-none");
            editTalent.classList.remove("d-none");
        }
        function close_edit_profile() {
            var talent = document.getElementById("talentBio");
            var editTalent = document.getElementById("talentBioEdit");
            talent.classList.remove("d-none");
            editTalent.classList.add("d-none");
        }
        function hide_modal1() {
            $('#modal1').trigger('click');
        }
        function hide_modal2() {
            $('#modal2').trigger('click');
        }
        function hide_modal3() {
            $('#modal3').trigger('click');
        }

        $("#ImgUpload").on("change", function(e) {
            var files = e.target.files;
            var formData = new FormData();
            formData.append('file', files[0]);

            $.ajax({
                url: '<?php echo base_url(); ?>Company/ApiUploadImageCompany',
                type: 'POST',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                dataType: 'json',
                success: function(response) {
                    console.log('Success');
                    console.log(response);
                }
            })
        });
    </script>
</body>

</html>