<?php require 'tmpl/head.php'; ?>

    <!--  Main Wrap  -->
    <div class="header-wrap">
        <!-- <img src="assets/img/banner.png" style="width: 100%;" /> -->
    </div>
    <div id="main-wrap">
        <!--  Page Content  -->
        <div id="page-content" class="header-static">
            <div id="godown" hidden>
                <a href="#home-wrap" class="btn-down">
                    <i class="material-icons">keyboard_arrow_down</i>
                </a>
            </div>
            <!--  END Slider  -->
            <div id="home-wrap" class="content-section fullpage-wrap">
                <!-- Abous us -->
                <div class="container">
                    <!-- Section Image -->
                    <div class="row no-margin">
                        <div class="col-md-6 padding-leftright-null">
                            <div data-responsive="parent-height" data-responsive-id="about" class="text">
                                <h2 class="margin-bottom-null left">About The Event</h2>
                                <div class="padding-onlytop-sm">
                                    <p class="margin-bottom">
                                      The first edition of Blockchain Innovation Week will take place on the <b>24th and 25th of May 2018</b>, The Hague’s first two-day event where blockchain developers share the <b>newest insights</b> in blockchain technologies.
                                    </p>
                                    <a href="/biw/about.php" class="btn-pro">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 padding-leftright-null">
                            <div class="section-image">
                                <picture class="">
                                    <img src="https://c1.staticflickr.com/1/852/26785490577_e4ecd65dcc_c.jpg" class="img-responsive" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <!-- END Section Image -->
                </div>

                <!-- BEGIN Divider -->

                <div id="page-header" class="secondary-background background-move-effect">
                    <div class="container">
                        <div class="row no-margin">
                            <a href="/biw/tickets.php" target="_blank" class="text" style="display: block;">
                                <h1 class="white">Get your tickets</h1>
                                <div class="btn-pro white">Buy a day ticket or passe-partout.</div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- End Divider -->

                <!--  Section Image Background with overlay  -->
                <!-- <div class="row margin-leftright-null grey-background">
                    <div class="bg-img overlay responsive" style="background-image:url(assets/img/quote-business.jpg)">
                        <div class="container padding-sm">
                            <div class="row no-margin">
                                <div class="text">
                                    <h3 class="big white margin-bottom-small">2 days of awesomeness!!!!</h3>
                                    <a href="contact.html" class="btn-pro white">Get tickets now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--  END Section Image Background with overlay  -->

                <?php include 'tmpl/program.php'; ?>

            </div>
        </div>
        <!--  END Page Content -->
    </div>
    <!--  Main Wrap  -->

<?php include('tmpl/foot.php'); ?>