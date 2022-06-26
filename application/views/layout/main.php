<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <section class="jumbotron-section">
        <div class="jumbotron-header-box">
            <a href="<?= site_url('/') ?>">
                <img class="justify-content-start" src="<?= base_url('assets/img/logo_talenthub.png') ?>" alt="logo digital talent hub">
            </a>
            <a class="text-decoration-none" href="<?= site_url('login') ?>">
                <button href="login.html" type="button" class="btn btn-primary d-flex align-items-center justify-content-center">Login</button>
            </a>
        </div>
        <div class="jumbotron-fluid">
            <div class="jumbotron-img-box">
                <img class="jumbotron-img-bg" src="<?= base_url('assets/img/rectangle.png') ?>" alt="background img" />
                <img class="jumbotron-img-person" src="<?= base_url('assets/img/img_frontpage.png') ?>" alt="person img" />
            </div>
        </div>
        <div class="jumbotron-text-box">
            <h1>Work Anywhere<br>Anytime</h1>
            <h6>Be Part of Our Global Community</h6>
            <div class="d-flex flex-row">
                <a href="<?= site_url('sign-up-company') ?>" class="btn btn-primary d-flex align-items-center justify-content-center">Hire A Tallent</a>
                <a href="<?= site_url('sign-up-talent') ?>" class="btn btn-primary d-flex align-items-center justify-content-center">Be A Tallent</a>
            </div>
        </div>
    </section>
    <section class="media-section d-none">
        <div class="container">
            <p class="media-title">Trusted by 5.000+ Companies Worldwide</p>
            <ul class="list-group list-group-horizontal d-flex">
                <li class="p2 flex-fill media-logo"><img src="<?= base_url('assets/img/logo_google.svg') ?>" alt="logo_google"></li>
                <li class="p2 flex-fill media-logo"><img src="<?= base_url('assets/img/logo_netflix.svg') ?>" alt="logo_netflix"></li>
                <li class="p2 flex-fill media-logo"><img src="<?= base_url('assets/img/logo_amazon.svg') ?>" alt="logo_amazon"></li>
                <li class="p2 flex-fill media-logo"><img src="<?= base_url('assets/img/logo_mandiri.svg') ?>" alt="logo_mandiri"></li>
                <li class="p2 flex-fill media-logo"><img src="<?= base_url('assets/img/logo_facebook.svg') ?>" alt="logo_facebook"></li>
            </ul>
        </div>
    </section>
    <section class="card-section partner-section">
        <div class="container">
            <p class="partner-title text-center">In Partner With</p>
            <div class="card w-100">
                <div class="card-body row">
                    <div class="col-12 col-lg-4 d-flex justify-content-center">
                        <div class="card-profile-img-box">
                                <div class="card-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="card-text-box">
                            <p class="card-title d-block blue mb-2 text-decoration-none">GISUA COMPANY</p>
                            <p class="card-text text-justify">We are the most respected outstaffing company in the city with a strong connection with Chernivtsi University. A Ukrainian company under Dutch management, it was founded in 2003 by CEO Edwin Zuydendorp and has been offering custom staffing solutions from the start. We can provide specialists with different technical skills ( .Net, PHP, JavaScript, Android, IOS, Xamarin, Java, Joomla, QA/QC, C#, Magento, Angular, etc.) and seniority levels ( Junior, Middle, Senior, Architect).
                                <br><br>Global IT Support is a Ukrainian-Dutch outstaffing company, which provides human resources to clients from Europe, the USA, and Canada. We are based in Ukraine and have more than 300 employees in Chernivtsi and Ivano-Frankivsk, Kyiv, and Lviv.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="experience-section">
        <div class="experience-title">
            Get An <span>Experience</span>
        </div>
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide show-neighbors" data-interval="false">
                <!-- data-ride="carousel" -->
                <ol class="carousel-indicators d-none">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="item__third">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <div class="card-img-box">
                                            <div class="card-img"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Wijaya Gunawan</h5>
                                            <p class="card-text">UI/UX Tokopedia</p>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of
                                                the
                                                printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy
                                                text ever since the 1500s.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="item__third">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <div class="card-img-box">
                                            <div class="card-img"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Wijaya Gunawan</h5>
                                            <p class="card-text">UI/UX Tokopedia</p>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of
                                                the
                                                printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy
                                                text ever since the 1500s.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="item__third">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <div class="card-img-box">
                                            <div class="card-img"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Wijaya Gunawan</h5>
                                            <p class="card-text">UI/UX Tokopedia</p>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of
                                                the
                                                printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy
                                                text ever since the 1500s.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                </a>

                <button class="btn btn-primary justify-content-end">Get An Experience</button>
            </div>
        </div>
    </section>
    <section class="about-section">
        <div class="card">
            <div class="row no-gutters align-items-center">
                <div class="col-md-5">
                    <div class="card-img-box">
                        <div class="card-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title"><span>About Us</span> Digital Tallent Hub</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining
                            essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                            containing Lorem Ipsum passages, and more recently with desktop publishing software like
                            Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('_partials/footer.php') ?>

    <?php $this->load->view('_partials/js.php') ?>
    <script>
        $('.carousel-item', '.show-neighbors').each(function() {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
        }).each(function() {
            var prev = $(this).prev();
            if (!prev.length) {
                prev = $(this).siblings(':last');
            }
            prev.children(':nth-last-child(2)').clone().prependTo($(this));
        });
    </script>
</body>

</html>