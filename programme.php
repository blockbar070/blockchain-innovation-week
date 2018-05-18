<?php require 'tmpl/head.php'; ?>

    <!--  Main Wrap  -->
    <div id="main-wrap">
        <!--  Page Content  -->
        <div id="page-content" class="header-static">
            <!--  Page Header  -->
            <div id="page-header" class="secondary-background">
                <div class="container">
                    <div class="row no-margin">
                        <div class="text">
                            <h1 class="white">Programme</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--  END Page Header  -->
            <div id="home-wrap" class="content-section fullpage-wrap">

                <br />

                <p align="center">
                    <i>The following times are not final. Program will be updated in the following days.</i>
                </p>

                <!-- Here the program schedule is loaded by JavaScript (program-schedule.js) -->
                <div id="program-schedule"></div>

                <?php include 'tmpl/buy-tickets.php'; ?>

                <div class="light-background" hidden>
                    <div class="container">
                        <!-- CTA -->
                        <div class="row no-margin">
                            <div class="col-md-9 padding-leftright-null">
                                <div class="text text-md-center">
                                    <h2 class="small">We provide the best services for any business.</h2>
                                </div>
                            </div>
                            <div class="col-md-3 padding-leftright-null">
                                <div class="text text-right padding-md-top-null text-md-center">
                                    <a href="#" class="btn-alt small shadow margin-null">More info</a>
                                </div>
                            </div>
                        </div>
                        <!-- END CTA -->
                    </div>
                </div>
            </div>
        </div>
        <!--  END Page Content -->
    </div>
    <!--  Main Wrap  -->

<?php require 'tmpl/foot.php'; ?>