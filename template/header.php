<?php
    use Utils\GetLink;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Хоумстейджинг. Москва</title>
    <meta name="description" content="Упаковка квартир Москва.(Красногорск)">
    <meta name="keywords" content="homestaging москва,упаковка квартир москва,homestaging красногорск,меблировка, комплектация квартир, хоумстейджер">

    <!-- Favicons -->
    <link href="<?=GetLink::get('main-page') . 'static/images/favicon.ico?ver=2'?>" rel="icon">
    <link href="<?=GetLink::get('main-page') . 'static/images/apple-touch-icon.png?ver=2'?>" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= GetLink::get('main-page')?>static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= GetLink::get('main-page')?>static/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link href="<?= GetLink::get('main-page')?>static/vendor/aos/aos.css" rel="stylesheet">

    <link href="<?= GetLink::get('main-page')?>static/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="<?= GetLink::get('main-page')?>static/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?= GetLink::get('main-page')?>static/css/main.css?ver=2" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Day
    * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">

<header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:natalia888@homesstaging.online">natalia888@homesstaging.online</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span><a href="tel:+7(925) 63-888-30">+7(925) 63-888-30</a></span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://t.me/homeupakovka"><i class="bi bi-telegram"></i></a>
                <a href="https://t.me/homeupakovka"><i class="bi bi-facebook"></i></a>
                <a href="https://t.me/homeupakovka"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="static/images/logo.png" alt=""> -->
                <h1 class="sitename">Homestaging МОСКВА</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="<?= GetLink::get('main-page')?>#hero" class="active">Главная</a></li>
                    <li><a href="<?= GetLink::get('main-page')?>#about">Обо мне</a></li>
                    <li><a href="<?= GetLink::get('main-page')?>#cards">Услуги</a></li>
                    <li><a href="<?= GetLink::get('main-page')?>#pricing">Цены</a></li>
                    <li><a href="<?= GetLink::get('main-page')?>#portfolio">Портфолио</a></li>
                    <li class="dropdown text-secondary"><a href="#"><span class="text-secondary">Проекты</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">ЖК Кранштадский</a></li>
                            <li class="dropdown"><a href="#"><span>ЖК Митинский лес</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="mitino1-details.html">Муравская улица, 38Бк1</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?= GetLink::get('main-page')?>#contact">Контакты</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>
</header>
