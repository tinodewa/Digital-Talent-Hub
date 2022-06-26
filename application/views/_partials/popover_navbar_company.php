<div id="popover-content" class="d-none">
    <div class="card-section notification-popover">
        <div class="card w-100">
            <div class="card-body">
                <div class="card-text-box d-flex align-items-center">
                    <div class="card-title text-decoration-none blue d-inline-block mr-auto">
                        Notifications
                    </div>
                    <a class="card-subtitle blue d-inline-block">
                        Mark as all read
                    </a>
                </div>
            </div>
        </div>
        <div class="notification-message-box">
            <div class="card mb-3 notification-message w-100 unread">
                <div class="row no-gutters">
                    <div class="col-md-9">
                        <p class="card-text"><span class="notification-message-sender">PT. Pertamina</span> - <span class="notification-message-text">Your has passed the first selection round, and is
                                expected
                                to follow the next stage</span></p>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end align-items-center">
                        <p class="card-text notification-time">9.32 PM</p>
                    </div>
                </div>
            </div>
            <div class="card mb-3 notification-message w-100 readed">
                <div class="row no-gutters">
                    <div class="col-md-9">
                        <p class="card-text"><span class="notification-message-sender">PT. Pertamina</span> - <span class="notification-message-text">Your has passed the first selection round, and is
                                expected
                                to follow the next stage</span></p>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end align-items-center">
                        <p class="card-text notification-time">9.32 PM</p>
                    </div>
                </div>
            </div>
            <div class="card mb-3 notification-message w-100 readed">
                <div class="row no-gutters">
                    <div class="col-md-9">
                        <p class="card-text"><span class="notification-message-sender">PT. Pertamina</span> - <span class="notification-message-text">Your has passed the first selection round, and is
                                expected
                                to follow the next stage</span></p>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end align-items-center">
                        <p class="card-text notification-time">9.32 PM</p>
                    </div>
                </div>
            </div>
            <div class="card mb-3 notification-message w-100 readed">
                <div class="row no-gutters">
                    <div class="col-md-9">
                        <p class="card-text"><span class="notification-message-sender">PT. Pertamina</span> - <span class="notification-message-text">Your has passed the first selection round, and is
                                expected
                                to follow the next stage</span></p>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end align-items-center">
                        <p class="card-text notification-time">9.32 PM</p>
                    </div>
                </div>
            </div>
            <div class="card mb-3 notification-message w-100 readed">
                <div class="row no-gutters">
                    <div class="col-md-9">
                        <p class="card-text"><span class="notification-message-sender">PT. Pertamina</span> - <span class="notification-message-text">Your has passed the first selection round, and is
                                expected
                                to follow the next stage</span></p>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end align-items-center">
                        <p class="card-text notification-time">9.32 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="popover-content2" class="d-none">
    <div class="card-section profile-popover">
        <div class="row">
            <div class="col-3 d-flex justify-content-center align-items-center p-0 ml-2">
                <div class="navbar-img-box">
                    <div class="navbar-img"></div>
                </div>
            </div>
            <div class="col-8 d-flex justify-content-start align-items-center p-0 ml-2">
                <p class="profile-popover-text-bold m-0">Wijaya Gunawan</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="m-auto">
                    <a class="btn btn-primary d-flex justify-content-center align-items-center w-100 white" href="<?= site_url('company/profile') ?>">Lihat Profile</a>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row mt-2 mb-2">
            <p class="col-12 profile-popover-text-bold m-0">Account</p>
            <a class="col-12 profile-popover-text-light" href="#">Setting</a>
            <a class="col-12 profile-popover-text-light" href="#">Help</a>
        </div>
        <div class="divider"></div>
        <div class="row mt-2 mb-2">
            <p class="col-12 profile-popover-text-bold m-0">Kelola</p>
            <a class="col-12 profile-popover-text-light" href="#">Posting & Activity</a>
        </div>
        <div class="divider"></div>
        <div class="row mt-2">
            <a class="col-12 profile-popover-text-light" href="<?= site_url('login') ?>">Logout</a>
        </div>
    </div>
</div>

<script>
    $('[data-bs-toggle="popover1"]').popover({
        html: true,
        placement: "bottom",
        content: function() {
            return $('#popover-content').html();
        }
    }).click(function(e) {
        $('[data-bs-toggle="popover1"]').not(this).popover('hide');
    });
    $('[data-bs-toggle="popover2"]').popover({
        html: true,
        placement: "bottom",
        content: function() {
            return $('#popover-content2').html();
        }
    }).click(function(e) {
        $('[data-bs-toggle="popover2"]').not(this).popover('hide');
    });
</script>