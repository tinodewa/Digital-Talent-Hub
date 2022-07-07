<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('_partials/company_navbar_overflow.php') ?>
    <section id="companyProfile" class="card-section company-profile">
        <div class="container">
            <div class="card w-100">
                <div class="card-body row">
                    <div class="col-md-8 col-lg-9">
                        <div class="row">
                            <div class="col-sm-5 col-lg-3 d-flex justify-content-center">
                                <input class="d-none" type="file" class="form-control-file" id="ImgUpload">
                                <div class="card-profile-img-box">
                                    <div class="card-img-circle">
                                        <div class="card-img-circle card-img">
                                            <div id="OpenImgUpload" class="card-img-subicon" onclick="search_image();">
                                                <img src="<?= base_url('assets/img/icon_camera.png') ?>" alt="icon_camera">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-9 d-flex justify-content-center justify-content-sm-start mb-3 mb-sm-0">
                                <div class="card-text-box text-center text-sm-left">
                                    <p class="card-title d-block blue mb-2">PT.PERTAMINA</p>
                                    <div class="card-icon-box d-inline-block"><span class="whatsapp"></span></div>
                                    <div class="card-icon-box  d-inline-block"><span class="gmail"></span></div>
                                    <div class="card-icon-box  d-inline-block"><span class="website"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="m-auto">
                            <div class="btn btn-primary justify-content-end w-100" onclick="edit_company();">
                                <div class="btn-icon-text-box">
                                    <span class="icon-edit"></span><a href="#">Edit Profile</a>
                                </div>
                            </div>
                            <a href="<?= site_url('company/post-project') ?>" class="btn btn-primary justify-content-end w-100 d-flex justify-content-center align-items-center">
                                <div>
                                    Post A Job
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-desc-box mt-4 col-md-9">
                        <div class="card-desc-title">
                            About Us
                        </div>
                        <div class="card-desc-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an -unknown printer took
                            a galley of type and scrambled it to make a type specimen book
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row w-100 mt-5 m-0 m-ms-2" id="image_galery">
                            <div class="col-sm-4 d-flex justify-content-center mb-3">
                                <div class="card-img-box">
                                    <div class="card-company-img first">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 d-flex justify-content-center mb-3">
                                <div class="card-img-box">
                                    <div class="card-company-img second">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 d-flex justify-content-center mb-3">
                                <input class="d-none" type="file" class="form-control-file" id="ImgUpload">
                                <div id="OpenImgUpload" class="card-img-box empty" onclick="search_image();">
                                    <div class="card-company-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="companyProfileEdit" class="card-section company-profile-edit d-none">
        <div class="container">
            <div class="card w-100">
                <form action="#">
                    <div class="card-body row">
                        <div class="col-md-9 order-1 order-md-1">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 d-flex justify-content-center">
                                    <input class="d-none" type="file" class="form-control-file" id="ImgUpload">
                                    <div class="card-profile-img-box">
                                        <div class="card-img-circle">
                                            <div class="card-img-circle card-img">
                                                <div id="OpenImgUpload" class="card-img-subicon" onclick="search_image();">
                                                    <img src="<?= base_url('assets/img/icon_camera.png') ?>" alt="icon_camera">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <div class="card-text-box">
                                        <div class="form-group">
                                            <input placeholder="Company Name" type="text" class="form-control" id="companyName" aria-describedby="companyName">
                                        </div>
                                        <div class="form-group w-50">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <img src="<?= base_url('assets/img/logos_whatsapp.png') ?>" alt="icon whatsapp">
                                                    </span>
                                                </div>
                                                <input placeholder="Company Whatsapp" type="text" class="form-control" id="companyWhatsapp" aria-describedby="companyWhatsapp">
                                            </div>
                                        </div>
                                        <div class="form-group w-50">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <img src="<?= base_url('assets/img/logos_google-gmail.png') ?>" alt="icon gmail">
                                                    </span>
                                                </div>
                                                <input placeholder="Company Gmail" type="email" class="form-control" id="companyGmail" aria-describedby="companyGmail">
                                            </div>
                                        </div>
                                        <div class="form-group w-50">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <img src="<?= base_url('assets/img/logos-website.png') ?>" alt="icon website">
                                                    </span>
                                                </div>
                                                <input placeholder="Company Website" type="text" class="form-control" id="companyWebsite" aria-describedby="companyWebsite">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 order-3 order-md-2">
                            <div class="m-auto">
                                <div class="btn btn-primary justify-content-end w-100" onclick="close_edit_company();">
                                    <div class="btn-icon-text-box">
                                        <a href="#">Save</a>
                                    </div>
                                </div>
                                <div class="btn btn-primary justify-content-end w-100 white" onclick="close_edit_company();"><a href="#">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-desc-box mt-4 col-md-9 order-2 order-md-3">
                            <div class="card-desc-title">
                                About Us
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mr-auto ml-auto mr-lg-0 ml-lg-0" id="companyAbout" placeholder="Lorem ipsum" required rows="4"></textarea>
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
        function search_image() {
            $('#ImgUpload').trigger('click');
        }

        function edit_company() {
            var company = document.getElementById("companyProfile");
            var editcompany = document.getElementById("companyProfileEdit");
            company.classList.add("d-none");
            editcompany.classList.remove("d-none");
        }

        function close_edit_company() {
            var company = document.getElementById("companyProfile");
            var editcompany = document.getElementById("companyProfileEdit");
            company.classList.remove("d-none");
            editcompany.classList.add("d-none");
        }

        $("#ImgUpload").on("change", function(e) {
            var files = e.target.files;
            var formData = new FormData();
            formData.append('file',files[0]);

            $.ajax({
                url: '<?php echo base_url(); ?>Company/ApiUploadImageCompany',
                type: 'POST',
                cache: false,
                contentType: false,
                processData: false,
                data:formData,
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