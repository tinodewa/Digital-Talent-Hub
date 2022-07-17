<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <section class="form-section d-flex flex-row">
        <div class="form-banner signup">
            <div class="jumbotron-fluid">
                <div class="jumbotron-img-box">
                    <img class="jumbotron-img-bg" src="<?= base_url('assets/img/rectangle.png') ?>" alt="background img" />
                    <img class="jumbotron-img-person" src="<?= base_url('assets/img/img_signup.png') ?>" alt="person img" />
                </div>
            </div>
        </div>
        <div class="form-box mt-5 mb-5">
            <img class="form-logo" src="<?= base_url('assets/img/logo_text_digitalenthub.svg') ?>" alt="logo Digitalent hub">
            <p class="form-title">Sign Up</p><p class="form-subtitle">Hire A Talent</p>
            <form class="d-flex justify-content-centers align-items-start" action="<?= base_url('sign-up-company') ?>" method="POST">
                <div class="form-group mb-3">
                    <label class="form-label" for="username">Nama Company</label>
                    <input placeholder="Nama Company" type="text" class="form-control" id="nama_company" name="nama_company" required="true">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input placeholder="Email" type="text" class="form-control" id="email" name="email" required="true">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="username">Username</label>
                    <input placeholder="Username" type="text" class="form-control" id="username" name="username" required="true">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group" id="show_hide_password">
                        <input placeholder="Password" type="password" class="form-control" id="password" name="password" required="true">
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="password_show_hide();">
                                <img src="<?= base_url('assets/img/eye.svg') ?>" id="show_eye" alt="icon show password">
                                <img class="d-none" src="<?= base_url('assets/img/eye-slash.svg') ?>" id="hide_eye"
                                    alt="icon hide password">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label class="form-label" for="verification-password">Verification Password</label>
                    <div class="input-group" id="show_hide_password">
                        <input placeholder="Password" type="password" class="form-control" id="verification_password" name="verification_password" required="true">
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="password_verification_show_hide();">
                                <img src="<?= base_url('assets/img/eye.svg') ?>" id="verification_show_eye" alt="icon show password">
                                <img class="d-none" src="<?= base_url('assets/img/eye-slash.svg') ?>" id="verification_hide_eye"
                                    alt="icon hide password">
                            </span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary justify-content-end mt-2">Sign Up</button>
                <div class="form-group w-100 text-center">
                    <span>Have a Account</span><a class="form-label" href="<?= base_url('login'); ?>">Login</a>
                </div>
            </form>
        </div>

    </section>
    
    <?php $this->load->view('_partials/js.php') ?>
    <script>
        function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye");
            var hide_eye = document.getElementById("hide_eye");
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
    <script>
        function password_verification_show_hide() {
            var x = document.getElementById("verification_password");
            var show_eye = document.getElementById("verification_show_eye");
            var hide_eye = document.getElementById("verification_hide_eye");
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
</body >

</html >