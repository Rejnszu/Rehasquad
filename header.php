<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    wp_head();
    ?>
</head>

<body>
    <div class="fixed-top menu-container">

        <nav class="navbar navbar-expand-md navbar-white bg-white">
            <a href="<?php echo get_home_url() ?>"><img class="logo" src="<?php echo get_template_directory_uri() . '/assets/logo.png'; ?>" alt="logo"></a>

            <div id="openMenu" class="navbar-toggler flip-card-front" onclick="openNav()">
                <i class="fas fa-bars"></i>
            </div>


            <div class="collapse navbar-collapse">
                <div class="container-fluid border-gradient">
                    <div class="upper-menu col-sm-12 text-right topmenu-margin">
                        <a href="https://www.facebook.com/rehasquad" class="fab fa-facebook-square"></a>
                        <a href="https://www.instagram.com/rehasquad/" class="fab fa-instagram"></a>
                        <a href="tel:600086251" class="fas fa-phone"><span>600-086-251</span></a>
                    </div>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="<?php echo get_home_url() ?>">Start </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nasz Squad
                        </a>
                        <div class="dropdown-menu dropdown-menu-own" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo get_home_url() ?>/On">Ziemowit Kabuła</a>
                            <a class="dropdown-item" href="<?php echo get_home_url() ?>/Ona">Katarzyna Kabuła</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo get_home_url() ?>/oferta">Oferta</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo get_home_url() ?>/cennik">Cennik</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo get_home_url() ?>/kontakt">Kontakt</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a class="sidebar_a" href="<?php echo get_home_url() ?>">Start</a>
        <div class="dropdown show">
            <a class="sidebar_a" class="dropdown-toggle" onclick="toogleMobileDropdown()">O nas <i id="mobile-fa-caret-down" class="fas fa-caret-down"></i><i id="mobile-fa-caret-up" class="fas fa-caret-up"></i></a>
            <div id="mobile-dropdown-content" class="sidebar_dropdown">
                <a class="sidebar_a" href="<?php echo get_home_url() ?>/On">Ziemowit Kabuła</a>
                <a class="sidebar_a" href="<?php echo get_home_url() ?>/Ona">Katarzyna Kabuła</a>
            </div>
        </div>
        <a class="sidebar_a" href="<?php echo get_home_url() ?>/oferta">Oferta</a>
        <a class="sidebar_a" href="<?php echo get_home_url() ?>/cennik">Cennik</a>
        <a class="sidebar_a" href="<?php echo get_home_url() ?>/kontakt">Kontakt</a>

    </div>