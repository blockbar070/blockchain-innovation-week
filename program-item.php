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
                            <h1 class="white">Page title</h1>
                            <ul class="breadcrumb white">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>Breadcrumb</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--  END Page Header  -->
            <div id="home-wrap" class="content-section fullpage-wrap">
                <div class="container">
                    <div class="row no-margin">
                        <!-- Project Content -->
                        <div class="col-md-4 padding-leftright-null">
                            <div class="text padding-onlytop-lg padding-onlybottom-lg padding-md-bottom-null">
                                <img src="assets/img/project.jpg" alt="" class="img-responsive project-image" style="display:none;">
                            </div>
                        </div>
                        <!-- END Project Content -->
                        <!-- Project Sidebar -->
                        <div class="col-md-8 padding-leftright-null">
                            <div class="row no-margin">
                                <div class="col-md-12 padding-leftright-null">
                                    <div class="text padding-onlytop-lg padding-md-top padding-md-bottom-lg">
                                        <h3 class="margin-bottom-small">About this project</h3>
                                        <div class="le-content">
                                            The content of this page.
                                        </div>
                                        <p hidden>
                                            <a href="/programme.php" class="btn-alt small active margin-null">See full program</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Project Sidebar -->
                    </div>
                </div>
                <!-- Services Section -->
                <?php include 'tmpl/program.php'; ?>
            </div>
        </div>
        <!--  END Page Content -->
    </div>
    <!--  Main Wrap  -->

<?php require 'tmpl/foot.php'; ?>