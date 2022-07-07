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
            <p class="form-title">Login Company</p>
            <?php echo $this->session->flashdata('msg_error_login'); ?>
            <form action="<?= base_url('login-company'); ?>" method="POST" class="d-flex justify-content-center align-items-center align-items-md-start">
                <div class="form-group mb-3">
                    <label class="form-label" for="username">Username</label>
                    <input placeholder="Username" type="text" class="form-control" id="username" name="username" required="true">
                </div>
                <div class="form-group mb-0">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group" id="show_hide_password">
                        <input placeholder="Password" type="password" class="form-control" id="password" name="password" required="true">
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="password_show_hide();">
                                <img src="<?= base_url('assets/img/eye.svg') ?>" id="show_eye" alt="icon show password">
                                <img class="d-none" src="<?= base_url('assets/img/eye-slash.svg') ?>" id="hide_eye" alt="icon hide password">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3 w-100 mt-2 mb-4">
                    <a class="form-label" href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <div class="form-group w-100 text-center">
                    <span>Not register yet?</span><a class="form-label" href="<?= base_url('sign-up-company'); ?>">Create Account</a>
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
</body>

</html>