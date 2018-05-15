<?php require 'tmpl/head.php'; ?>

    <!--  Main Wrap  -->
    <img src="assets/img/banner.png" style="width: 100%;" />
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
                    <div class="row no-margin padding-onlytop-lg">
                        <div class="col-md-6 padding-leftright-null">
                            <div data-responsive="parent-height" data-responsive-id="about" class="text">
                                <h2 class="margin-bottom-null left">About The Event</h2>
                                <div class="padding-onlytop-sm">
                                    <p class="margin-bottom">
                                      The first edition of Blockchain Innovation Week will take place on the <b>24th and 25th of May 2018</b>, The Hague’s first two-day event where blockchain developers share the <b>newest insights</b> in blockchain technologies.
                                    </p>
                                    <a href="about.html" class="btn-pro">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 padding-leftright-null">
                            <div data-responsive="child-height" data-responsive-id="about" class="section-image height-auto-sm">
                                <picture class="section right">
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
                            <a href="https://events.guts.tickets/events/104" target="_blank" class="text" style="display: block;">
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

                <!-- BEGIN Timeline -->
                <div class="container">
                    <!--  Portfolio  -->
                    <section id="projects" data-isotope="load-simple" class="page">
                        <!--  Filters  -->
                        <div class="row no-margin">
                            <div class="col-sm-12 padding-leftright-null">
                                <div class="filter-wrap">
                                    <ul class="col-md-12 filters padding-leftright-null">
                                        <li data-filter="*" class="is-checked">All</li>
                                        <li data-filter="tech">Technology</li>
                                        <li data-filter="business">Business</li>
                                        <li data-filter="ngo">NGO</li>
                                        <li data-filter="game">Game</li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li data-filter="lecture">Lecture</li>
                                        <li data-filter="workshop">Workshop</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--  END Filters  -->
                        <div class="projects-items equal three-columns">
                            <!-- This section will be filled by `assets/js/program.js` -->
                        </div>
                    </section>
                    <!-- END Portfolio -->
                </div>

            </div>
        </div>
        <!--  END Page Content -->
    </div>
    <!--  Main Wrap  -->

<?php include('tmpl/foot.php'); ?>