<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="google-adsense-account" content="ca-pub-6947664556061935">
    <meta name="description" content="Temukan informasi terkini, analisis mendalam, dan cerita inspiratif tentang peristiwa lokal, budaya, dan perkembangan masyarakat Pekalongan dan sekitarnya" />
    <meta name="author" content="Batik TV" />
    <title><?php echo $title; ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('home') ?>/assets/favicon.png" />
    <!-- Font Awesome icons-->
    <link href="<?php echo base_url('admin') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url('home') ?>/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-campur text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="img-fluid" width="<?= $lebar ?>" src="<?php echo base_url('home') . $logo ?>" alt="Batik TV"></a>
            <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/">
                            <i class="fas fa-home"></i> Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/news">
                            <i class="fas fa-newspaper"></i> Berita</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/program">
                            <i class="fas fa-tags"></i> Program</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/jadwal">
                            <i class="fas fa-calendar"></i> Jadwal</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/profil">
                            <i class="fas fa-landmark"></i> Profil</a></li>
                    <li class="nav-item mx-0 mx-lg-1 d-flex">
                        <a class="nav-link px-0 ps-lg-3" href="/live">
                            <div class="btn-live">
                                <div class="spinner-grow spinner-grow-sm text-danger" role="status"></div>
                                LIVE
                            </div>
                        </a>
                        <a class="nav-link px-0" href="/agency">
                            <div class="btn-agency">
                                <i class="fas fa-search"></i> Agency
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>