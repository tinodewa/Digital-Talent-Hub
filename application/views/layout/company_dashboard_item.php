<?php foreach ($dataCompany as $item1) { ?>
    <div class="card-section card-click mt-4 mb-0">
        <a href="<?= site_url('company-project/' . $item1['ID_PROJECT']) ?>">
            <div class="card w-100 pt-0 pb-0">
                <div class="card-body row no-gutters">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2 order-1 order-md-1 d-flex align-items-center justify-content-center">
                        <div class="card-profile-img-box">
                            <div class="card-img-circle">
                                <img src="<?php echo $item1['PICT_PROJECT']; ?>" class="card-img-circle card-img no-border" alt="user picture" onerror="this.src='<?= base_url('assets/img/iconmonstr_user.png') ?>'">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-8 order-3 order-md-2 justify-content-center text-center text-sm-left">
                        <div class="card-text-box">
                            <p class="card-title d-block blue no-underline mb-2"><?= $item1['NAMA_COMPANY']; ?></p>
                            <p class="card-subtitle d-block blue no-underline mb-2">
                                <span><?= $item1['NAMA_PROJECT']; ?></span>
                                <br>
                                <span><?= word_limiter($item1['DESC_PROJECT'], 45, ' ...'); ?></span>
                            </p>
                            <div class="activity-skills">
                                <?php foreach ($item1['SKILL_PROJECT'] as $item2) { ?>
                                    <div class="card-item d-inline-block"><?= $item2['NAMA_SKILL']; ?></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2 order-2 order-md-3 d-flex align-items-center justify-content-center">
                        <p class="card-title d-block blue no-underline mb-0">$ <?= $item1['SALARY_PROJECT']; ?></p>
                    </div>
                </div>
            </div>
        </a>
    </div>
<?php } ?>