<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('_partials/company_navbar_overflow.php') ?>
    <section id="CompanyDashboard" class="card-section talent-dashboard">
        <div class="container">
            <div class="card w-100 p-0 p-sm-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row no-gutters d-flex justify-content-center">
                                <div class="form-group col-8 col-md-6">
                                    <input placeholder="Search by Project Name?" type="text" class="form-control input-talent" name="SearchData" id="search" aria-describedby="inputTalent">
                                </div>
                                <div class="card-btn-box col-2 ml-2 mr-0 mr-md-auto">
                                    <button type="button" class="btn btn-primary btn-search">GO</button>
                                </div>
                                <div class="col-md-3">
                                    <div class="m-auto">
                                        <a href="<?= site_url('company-post-project') ?>" class="btn btn-primary w-100 d-flex justify-content-center align-items-center text-decoration-none">
                                            <div id="editProfile" class="btn-icon-text-box">
                                                Post A Project
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="card-section talent-file talent-activity">
                        <div class="container p-0">
                            <div class="card w-100 card-no-border p-0">
                                <img src="https://acegif.com/wp-content/uploads/loading-45.gif" class="loading w-25 rounded mx-auto">
                                <div id="company_item"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('_partials/js.php') ?>
    <?php $this->load->view('_partials/popover_navbar_company.php') ?>
    <script type="text/javascript">
        $(document).ready(function() {
            GetAllData();

            function GetAllData() {
                $.ajax({
                    url: '<?php echo base_url(); ?>Company/ApiGetAllCompany?Keyword=',
                    type: 'GET',
                    success: function(response, status) {
                        $('.loading').addClass("d-none");
                        $("#company_item").html(response);
                    }

                });
            }

            $("#search").on('keyup', function(e) {
                if (e.key === 'Enter' || e.keyCode === 13) {
                    SearchData()
                }
            });

            $(".btn-search").on('click', function() {
                SearchData()
            });

            function SearchData() {
                var Keyword = $('input[name="SearchData"]').val();
                $("#company_item").html("");
                $('.loading').removeClass("d-none");
                var NewKeyword = Keyword.replace(/\s+/g, '+').toLowerCase();
                $.ajax({
                    url: '<?php echo base_url(); ?>Company/ApiGetAllCompany?Keyword=' + Keyword,
                    type: 'GET',
                    success: function(response, status) {
                        $('.loading').addClass("d-none");
                        $("#company_item").html(response);
                    }

                });
            }
        });
    </script>
</body>

</html>