<section class="navbar-section mb-4">
    <div class="wrapper"></div>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand order-md-1" href="<?= site_url() ?>"><img src="<?= base_url('assets/img/logo_talenthub.png') ?>" alt="logo digitalent hub"></a>
            <div class="navbar-control-box order-md-3">
                <a class="navbar-notification-box" data-bs-toggle="popover1" data-bs-placement="bottom" data-bs-content-id="popover-content" tabindex="0" role="button">
                    <div class="navbar-notification"></div>

                </a>
                <a class="navbar-img-box" data-bs-toggle="popover2" data-bs-placement="bottom" data-bs-content-id="popover-content2" tabindex="0" role="button">
                    <img src="<?php echo $this->session->userdata('PICT_COMPANY'); ?>" class="navbar-img" alt="user picture" onerror="this.src='<?= base_url('assets/img/iconmonstr_user.png') ?>'">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse order-md-2" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('company') ?>">Find Job</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('company/session') ?>">Find Session</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Applied Job</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>