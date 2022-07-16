<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <section class="form-section d-flex flex-row">
        <div class="form-banner">
            <div class="jumbotron-fluid">
                <div class="jumbotron-img-box">
                    <img class="jumbotron-img-bg" src="<?= base_url('assets/img/rectangle.png') ?>" alt="background img" />
                    <img class="jumbotron-img-person" src="<?= base_url('assets/img/img_login.png') ?>" alt="person img" />
                </div>
            </div>
        </div>
        <div class="form-box">
            <img class="form-logo" src="<?= base_url('assets/img/logo_text_digitalenthub.svg') ?>" alt="logo Digitalent hub">
            <div id="loginDecision" class="login-decision row align-items-center justify-content-center">
                <p class="form-subtitle col-12 text-center mt-5">login</p>
                <div onclick="showFormCompany();" class="login-company mb-4 mb-sm-0 col-8 col-sm-5 mr-sm-3 d-flex align-items-center justify-content-center flex-column">
                    <img src="<?= base_url('assets/img/Office_Bag_Home.png') ?>" alt="icon office bag">
                    <div class="form-label">Company</div>
                </div>
                <div onclick="showFormTalent();" class="login-talent col-8 col-sm-5 ml-sm-3 d-flex align-items-center justify-content-center flex-column">
                    <img src="<?= base_url('assets/img/Gender_Face_Comp.png') ?>" alt="icon person">
                    <div class="form-label">Talent</div>
                </div>
            </div>
            <div id="formLoginTalent" class="form-login-talent d-none">
                <p class="form-title">Login</p><p class="form-subtitle">As a Talent</p>
                <?php echo $this->session->flashdata('msg_error_login'); ?>
                <form action="<?= base_url('Main/login'); ?>" method="POST" class="d-flex justify-content-center align-items-center align-items-md-start">
                    <div class="form-group mb-3">
                        <label class="form-label" for="username">Username</label>
                        <input placeholder="Username" type="text" class="form-control" id="username_talent" name="username" required="true">
                    </div>
                    <div class="form-group mb-0">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group" id="show_hide_password">
                            <input placeholder="Password" type="password" class="form-control" id="password_talent" name="password" required="true">
                            <div class="input-group-append">
                                <span class="input-group-text" onclick="password_talent_show_hide();">
                                    <img src="<?= base_url('assets/img/eye.svg') ?>" id="show_eye_talent" alt="icon show password">
                                    <img class="d-none" src="<?= base_url('assets/img/eye-slash.svg') ?>" id="hide_eye_talent" alt="icon hide password">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3 w-100 mt-2 mb-4">
                        <a class="form-label" href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button onclick="hideFormTalent();" class="btn btn-primary">Back</button>
                    <div class="form-group w-100 text-center">
                        <span>Not register yet?</span><a class="form-label" href="<?= site_url('/sign-up-talent') ?>">Create Account</a>
                    </div>
                </form>
            </div>
            
            <div id="formLoginCompany" class="form-login-company d-none">
                <p class="form-title">Login</p><p class="form-subtitle">As a Company</p>
                <?php echo $this->session->flashdata('msg_error_login'); ?>
                <form action="<?= base_url('Main/login'); ?>" method="POST" class="d-flex justify-content-center align-items-center align-items-md-start">
                    <div class="form-group mb-3">
                        <label class="form-label" for="username">Username</label>
                        <input placeholder="Username" type="text" class="form-control" id="username_company" name="username" required="true">
                    </div>
                    <div class="form-group mb-0">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group" id="show_hide_password">
                            <input placeholder="Password" type="password" class="form-control" id="password_company" name="password" required="true">
                            <div class="input-group-append">
                                <span class="input-group-text" onclick="password_company_show_hide();">
                                    <img src="<?= base_url('assets/img/eye.svg') ?>" id="show_eye_company" alt="icon show password">
                                    <img class="d-none" src="<?= base_url('assets/img/eye-slash.svg') ?>" id="hide_eye_company" alt="icon hide password">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3 w-100 mt-2 mb-4">
                        <a class="form-label" href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button onclick="hideFormCompany();" class="btn btn-primary">Back</button>
                    <div class="form-group w-100 text-center">
                        <span>Not register yet?</span><a class="form-label" href="<?= site_url('/sign-up-company') ?>">Create Account</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php $this->load->view('_partials/js.php') ?>
    <script>
        function hideFormTalent() {
            var talentForm = document.getElementById("formLoginTalent");
            var loginDecision = document.getElementById("loginDecision");
            talentForm.classList.add("d-none");
            loginDecision.classList.remove("d-none");
        }
        function hideFormCompany() {
            var companyForm = document.getElementById("formLoginCompany");
            var loginDecision = document.getElementById("loginDecision");
            companyForm.classList.add("d-none");
            loginDecision.classList.remove("d-none");
        }
        function showFormTalent() {
            var talentForm = document.getElementById("formLoginTalent");
            var loginDecision = document.getElementById("loginDecision");
            loginDecision.classList.add("d-none");
            talentForm.classList.remove("d-none");
        }
        function showFormCompany() {
            var companyForm = document.getElementById("formLoginCompany");
            var loginDecision = document.getElementById("loginDecision");
            loginDecision.classList.add("d-none");
            companyForm.classList.remove("d-none");
        }
        
        function password_talent_show_hide() {
            var x = document.getElementById("password_talent");
            var show_eye = document.getElementById("show_eye_talent");
            var hide_eye = document.getElementById("hide_eye_talent");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";

            }
        }
        function password_company_show_hide() {
            var x = document.getElementById("password_company");
            var show_eye = document.getElementById("show_eye_company");
            var hide_eye = document.getElementById("hide_eye_company");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";

            }
        }
    </script>
</body>

</html>