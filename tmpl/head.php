<?php
$is_home = strpos($_SERVER['SCRIPT_FILENAME'], '/index') > -1;
$is_about = strpos($_SERVER['SCRIPT_FILENAME'], '/about') > -1;
$is_program_page = strpos($_SERVER['SCRIPT_FILENAME'], '/program-item') > -1;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blockbar | Open Blockchain Lab The Hague</title>
    <link rel="icon shortcut" href="assets/img/favicon-16x16.png" sizes="16x16" type="image/png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-theme.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/program.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <!-- Flexslider -->
    <link rel="stylesheet" href="assets/css/flexslider.css">

    <!-- Owl -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

</head>

<body>

    <!--  loader  -->
    <div id="myloader">
        <div class="loader">
            <div class="grid">
                <div class="cube cube1"></div>
                <div class="cube cube2"></div>
                <div class="cube cube3"></div>
                <div class="cube cube4"></div>
                <div class="cube cube5"></div>
                <div class="cube cube6"></div>
                <div class="cube cube7"></div>
                <div class="cube cube8"></div>
                <div class="cube cube9"></div>
            </div>
        </div>
    </div>

    <!--  Header & Menu  -->
    <header id="header">

        <div class="top-nav">
            <!--  Header Logo  -->
            <div id="logo">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" class="normal" alt="logo">
                    <img src="assets/img/logo@2x.png" class="retina" alt="logo">
                </a>
            </div>
            <!--  END Header Logo  -->
            <div class="secondary-menu">
                <ul>
                    <li class="mail">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:team@blockbar.nl">team@blockbar.nl</a>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-default">
            <!--  Classic menu, responsive menu classic  -->
            <div id="menu-classic">
                <div class="menu-holder">
                    <ul>
                        <li>
                            <a href="/"
                                class="<?php echo $is_home ? 'active-item' : ''; ?>">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/programme.php"
                                class="<?php echo $is_program_page ? 'active-item' : ''; ?>">
                                Programme
                            </a>
                        </li>
                        <li>
                            <a href="/tickets.php"
                                class="<?php echo $is_tickets_page ? 'active-item' : ''; ?>">
                                Tickets
                            </a>
                        </li>
                        <li>
                            <a href="/about.php"
                                class="<?php echo $is_about_page ? 'active-item' : ''; ?>">
                                About
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--  END Classic menu, responsive menu classic  -->
            <!--  Button for Responsive Menu Classic  -->
            <div id="menu-responsive-classic">
                <div class="menu-button">
                    <span class="bar bar-1"></span>
                    <span class="bar bar-2"></span>
                    <span class="bar bar-3"></span>
                </div>
            </div>
            <!--  END Button for Responsive Menu Classic  -->
            <div class="secondary-menu-mobile">
                <ul>
                    <li class="mail">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:team@blockbar.nl">team@blockbar.nl</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--  END Header & Menu  -->