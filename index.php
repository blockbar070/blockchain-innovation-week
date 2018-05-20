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
                                <h2 class="margin-bottom-null left">Blockchain Innovation Week, The Hague</h2>
                                <div class="padding-onlytop-sm">
                                    <p>
                                        This week will be a special one.
                                    </p>

                                    <p>
                                        In the week of the <a href="https://www.coindesk.com/bitcoin-pizza-day-celebrating-pizza-bought-10000-btc/" target="_blank">first pizza bought with Bitcoin</a> we organize two full days on which experts share the <b>newest developments and insights</b> in blockchain technologies.
                                    </p>

                                    <p class="margin-bottom">
                                        Come and learn about the newest blockchain tech, business cases, using a hardware wallet and examples of blockchain apps running in real life. <b>24th and 25th of May 2018</b>.
                                    </p>
                                    <div style="display: flex; justify-content: flex-left;">
                                        <a href="./about.php" class="btn-pro">Read More</a>
                                        <a href="./tickets.php" class="btn-pro" style="margin-left: 50px;">Buy Tickets</a>
                                    </div>
                                    <br><br><hr><br>
                                    <p>
                                      We thank our sponsors:
                                    </p>
                                    <p>
                                      &raquo; <a href="https://espeoblockchain.com/" target="_blank">Espeo Blockchain</a><br>
                                      &raquo; <a href="https://impactcity.nl/" target="_blank">Impact City</a><br>
                                      &raquo; <a href="https://cryptopepes.io/" target="_blank">CryptoPepes</a><br>
                                      &raquo; <a href="https://www.thehaguetech.com/" target="_blank">The Hague Tech</a><br>
                                      &raquo; <a href="https://www.meetup.com/blockbar/" target="_blank">The Blockbar community</a>
                                    </p>
                                    <p>
                                      This event is organized in collaboration with <a href="http://ethereum.nl" target="_blank">ETH DEV NL</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 padding-leftright-null">
                            <?php include 'tmpl/honeycomb.php'; ?>
                        </div>
                    </div>
                    <!-- END Section Image -->
                </div>

                <!-- BEGIN Divider -->

                <div id="page-header" class="secondary-background background-move-effect">
                    <div class="container">
                        <div class="row no-margin">
                            <a href="./tickets.php" class="text" style="display: block;">
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