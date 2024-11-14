<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="google-adsense-account" content="ca-pub-6947664556061935">
    <meta name="description" content="<?= substr($news->post_content, 0, 70) ?> ..." />
    <meta name="author" content="Batik TV" />
    <title><?php echo $title; ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('home') ?>/assets/favicon.png" />
    <!-- Meta -->
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:image" content="<?= base_url("../home/assets/img/news/$news->post_thumbnail") ?>" />
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
    <div class="container-xxl pt-6">
        <div class="row g-4 pt-2">
            <div class="col-1"></div>
            <div class="col-lg-7">
                <?php
                if ($news->post_type == 'article') { ?>
                    <div class="ratio ratio-16x9 position-relative rounded overflow-hidden mb-3">
                        <?php
                        if (!empty($news->post_link)) { ?>
                            <iframe src="https://www.youtube.com/embed/<?php echo $news->post_link; ?>?autoplay=1&autohide=1&controls=1&disablekb=1&modestbranding=1&fs=1&rel=1&showinfo=0&enablejsapi=1&origin=https%3A%2F%2Fwww.batiktv.id&widgetid=1" title="<?php echo $news->post_title; ?>" class="rounded" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <?php } elseif (!empty($news->post_thumbnail)) { ?>
                            <img src="<?= base_url("../home/assets/img/news/$news->post_thumbnail") ?>" width="100%" class="rounded" alt='<?= $news->post_title ?>'>
                        <?php } else { ?>
                            <img src="<?= base_url("../home/assets/img/btv.png") ?>" width="100%" class="rounded" alt='<?= $news->post_title ?>'>
                        <?php } ?>
                    </div>
                <?php
                }
                if ($news->post_type == 'article') { ?>
                    <div class="tanggal mb-2">
                        <i class="fas fa-user-pen"></i> <?php echo $news->author; ?> &nbsp; | &nbsp;
                        <i class="fas fa-clock"></i> <?= $convertDate = date("d/m/Y - H:i", strtotime($news->post_time)); ?> WIB
                    </div>
                <?php } ?>
                <div class="h4">
                    <?php echo $news->post_title; ?>
                </div>
                <div class="divider-full bg-campur rounded mb-3" style="height: 0.25rem; max-width: 8rem;"></div>
                <div class="row">
                    <div class="artikel tj">
                        <?php echo $news->post_content; ?>
                    </div>
                </div>
                <a href="#" target="_blank" class="btn-sm btn-primary mb-2 artikel" style="text-decoration:none" type="button">
                    <i class="fas fa-hashtag"></i> Berita Daerah
                </a>
                <hr>
                <p class="artikel">Bagikan artikel:
                <div class="sharethis-inline-share-buttons"></div>
                </p>
                <img class="img-fluid rounded mt-3" src="../../../home/assets/img/banner4.png" alt="Banner Iklan">
            </div>
            <div class="col-lg-4">
                <div class="bg-light rounded p-4 pt-0 mb-4">
                    <div class="h5 pt-4 pb-1">Berita Terkini
                        <hr>
                    </div>
                    <div class="row g-4 scroll-table3">
                        <?php foreach ($news2 as $row) : ?>
                            <div class="col-12">
                                <div class="row g-4 align-items-center">
                                    <div class="col-5">
                                        <div class="ratio ratio-16x9 position-relative rounded overflow-hidden">
                                            <?php if (!empty($row['post_thumbnail'])) { ?>
                                                <img src="<?= base_url("../home/assets/img/news/$row[post_thumbnail]") ?>" width="100%" alt='<?= $row['post_title'] ?>'>
                                            <?php } else { ?>
                                                <img src="<?= base_url("../home/assets/img/btv.png") ?>" width="100%" alt='<?= $row['post_title'] ?>'>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="features-content d-flex flex-column">
                                            <a href="/news/<?= $row['post_title_seo']; ?>" style="text-decoration:none" class="h6">
                                                <?= substr($row['post_title'], 0, 50) ?>...
                                            </a>
                                            <small><i class="fas fa-clock"></i> <?= $convertDate = date("d/m/Y", strtotime($row['post_time'])); ?></i> </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="row mt-4">
                            <a href="/news" class="btn btn-primary ms-2 py-2 h3" type="button">Berita Lainnya</a>
                        </div>
                    </div>
                </div>
                <div id="table" class="bg-secondary rounded p-4 mb-4">
                    <div class="row scroll-table2">
                        <div class="table-responsive">
                            <table class="table text-center table-bordered" id="dataTable" cellspacing="0">
                                <div class="h5 mb-2 text-white text-center">Jadwal Tayang <?= $hari; ?></div>
                                <thead>
                                    <tr class="text-white bg-campur h6">
                                        <th>Jam</th>
                                        <th>Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($tayang as $row) : ?>
                                        <tr class="text-white">
                                            <td><?= $row['jam']; ?></td>
                                            <td><?= $row['program']; ?></td>
                                        </tr>
                                </tbody>
                            <?php
                                    endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
                <img class="img-fluid rounded" src="../../../home/assets/img/banner3.png" alt="Banner Iklan">
            </div>
        </div>
    </div>