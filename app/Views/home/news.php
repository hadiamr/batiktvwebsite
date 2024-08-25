<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Batik TV News</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('home') ?>/assets/favicon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
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
            <a class="navbar-brand" href="/news"><img class="img-fluid" width="250" src="<?php echo base_url('home') ?>/assets/img/logo2.svg" alt="Batik TV News"></a>
        </div>
    </nav>
    <div class="container-xxl pt-6">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 px-3">
                    <div class="row bg-light rounded px-3 pt-4">
                        <?php foreach ($news as $row) : ?>
                            <div class="col-lg-6 pb-4">
                                <div class="position-relative rounded overflow-hidden ratio ratio-16x9">
                                    <a href="/news/<?= $row->post_title_seo; ?>">
                                        <?php
                                        if (!empty($row->post_thumbnail)) {
                                            echo '<img src="' . base_url("../home/assets/img/news/$row->post_thumbnail") . '" width="100%" height="100%">';
                                        } else {
                                            echo '<img src="' . base_url("../home/assets/img/btv.png") . '" width="100%" height="100%">';
                                        }
                                        ?>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center pt-4 pb-2">
                                    <i class="fas fa-clock me-2"> </i><?= $convertDate = date("d/m/Y - H:i", strtotime($row->post_time)); ?> WIB
                                </div>
                                <a href="/news/<?= $row->post_title_seo; ?>" style="text-decoration:none" class="h5">
                                    <?= substr($row->post_title, 0, 50) ?>...
                                </a>
                                <div class="artikel mt-2"><?= substr($row->post_content, 0, 70) ?>... <a href="/news/<?= $row->post_title_seo; ?>" style="text-decoration:none">Selengkapnya</a></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="row mt-3">
                        <?= $pager->links('no', 'bootstrap_pagination') ?>
                    </div>
                </div>
                <div class="col-lg-4 px-3">
                    <div class="h5">Program Unggulan</div>
                    <div class="divider-full bg-campur rounded mb-3" style="height: 0.25rem; max-width: 8rem;"></div>
                    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner w-100">
                            <div class="carousel-item active">
                                <div class="card card-body">
                                    <img class="rounded img-fluid" src="<?php echo base_url('home') ?>/assets/img/program/programbedah.png" alt="...">
                                    <div class="text-center mt-2">
                                        <a href="https://www.youtube.com/@BatikTVNews" target="_blank" class="btn btn-primary my-2" style="width: 61%;" type="button">
                                            <h5 class="mb-0">Berita Daerah</h5>
                                        </a>
                                        <div class="artikel biru">Senin - Sabtu Jam 14.00 & 19.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card card-body">
                                    <img class="rounded img-fluid" src="<?php echo base_url('home') ?>/assets/img/program/programhealing.png" alt="...">
                                    <div class="text-center mt-2">
                                        <a href="https://www.youtube.com/playlist?list=PL0c5AjrKK29omwylzQA-0C-QJIJKCY-7f" target="_blank" class="btn btn-primary my-2" style="width: 60%;" type=" button">
                                            <h5 class="mb-0">Healing</h5>
                                        </a>
                                        <div class="artikel biru">Kamis & Minggu Jam 17.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card card-body">
                                    <img class="rounded img-fluid" src="<?php echo base_url('home') ?>/assets/img/program/programmatari.png" alt="...">
                                    <div class="text-center mt-2">
                                        <a href="https://www.youtube.com/playlist?list=PL0c5AjrKK29pbemvwx9GwEfd7Bq51z4tF" target="_blank" class="btn btn-primary my-2" style="width: 60%;" type=" button">
                                            <h5 class="mb-0">Matari</h5>
                                        </a>
                                        <div class="artikel biru">Kamis (17.00) & Minggu (20.30)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card card-body">
                                    <img class="rounded img-fluid" src="<?php echo base_url('home') ?>/assets/img/program/programicipicip.png" alt="...">
                                    <div class="text-center mt-2">
                                        <a href="https://www.youtube.com/playlist?list=PL0c5AjrKK29okgjYjBozRxM2xmNJgVQ_z" target="_blank" class="btn btn-primary my-2" style="width: 60%;" type=" button">
                                            <h5 class="mb-0">Icip-icip</h5>
                                        </a>
                                        <div class="artikel biru">Rabu (17.00) & Jum'at (18.00)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div id="table" class="bg-secondary rounded p-4 mb-4">
                        <table class="table text-center table-bordered" id="dataTable" cellspacing="0">
                            <div class="h5 mb-2 text-white text-center">Jadwal Tayang <?= $hari; ?><div>
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
                    <!-- <img class="img-fluid rounded" src="../../../home/assets/img/banner3.png"> -->
                </div>
            </div>
        </div>