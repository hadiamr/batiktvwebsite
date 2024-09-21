<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="google-adsense-account" content="ca-pub-6947664556061935">
    <meta name="description" content="Televisi lokal di bawah Dinas Komunikasi dan Informatika Kota Pekalongan yang telah berdiri sejak April 2012. Batik TV hadir di channel digital 30 UHF dan platform media sosial" />
    <meta name="author" content="Batik TV" />
    <title>Batik TV</title>
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
            <a class="navbar-brand" href="#"><img class="img-fluid" width="160" src="<?php echo base_url('home') ?>/assets/img/logo.svg" alt="Batik TV"></a>
            <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">
                            <i class="fas fa-home"></i> Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/news">
                            <i class="fas fa-newspaper"></i> Berita</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/program">
                            <i class="fas fa-tags"></i> Program</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/jadwal">
                            <i class="fas fa-calendar"></i> Jadwal</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/profil">
                            <i class="fas fa-landmark"></i> Profil</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-biru text-white container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-5 text-center text-lg-start">
                <h1 class="text-center text-lg-start"><?= $setelan->judul ?></h1>
                <h5 class="fw-light lh-base text-center text-lg-start"><?= $setelan->deskripsi ?></h5>
                <div class="d-md-flex">
                    <a class="start btn btn-xl btn-light" href="#berita">
                        YUK CARI TAHU!
                    </a>
                </div>
                <div class="my-5 py-5">
                    <a target="_blank" class="btn btn-outline-light btn-social mx-1" aria-label="Facebook" href="<?= $setelan->facebook ?>"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a target="_blank" class="btn btn-outline-light btn-social mx-1" aria-label="Twitter" href="<?= $setelan->twitter ?>"><i class="fab fa-fw fa-twitter"></i></a>
                    <a target="_blank" class="btn btn-outline-light btn-social mx-1" aria-label="Instagram" href="<?= $setelan->instagram ?>"><i class="fab fa-fw fa-instagram"></i></a>
                    <a target="_blank" class="btn btn-outline-light btn-social mx-1" aria-label="Youtube" href="<?= $setelan->youtube ?>"><i class="fab fa-fw fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-5">
                <img class="img-fluid" src="<?php echo base_url('home') ?>/assets/img/build.webp" alt="..." />
            </div>
        </div>
    </header>
    <!-- Berita Section-->
    <section class="page-section" id="berita">
        <!-- Berita Section Heading-->
        <h1 class=" text-center text-uppercase text-secondary mb-0">Berita Terkini</h1>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line bg-campur"></div>
            <div class="divider-custom-icon"><i class="fas fa-newspaper"></i></div>
            <div class="divider-custom-line bg-campur"></div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <?php foreach ($news as $row) : ?>
                        <div class="bg-light rounded px-4 pt-4 pb-4 mb-4 col-lg-7">
                            <div class="ratio ratio-16x9 position-relative rounded overflow-hidden">
                                <a href="/news/<?= $row['post_title_seo']; ?>">
                                    <?php if (!empty($row['post_thumbnail'])) { ?>
                                        <img src="<?= base_url("../home/assets/img/news/$row[post_thumbnail]") ?>" width="100%" alt='<?= $row['post_title'] ?>'>
                                    <?php } else { ?>
                                        <img src="<?= base_url("../home/assets/img/btv.png") ?>" width="100%" alt='<?= $row['post_title'] ?>'>
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="d-flex align-items-center pt-4 pb-2">
                                <i class="fas fa-clock me-2"> </i><?= $convertDate = date("d/m/Y - H:i", strtotime($row['post_time'])); ?> WIB
                            </div>
                            <a href="/news/<?= $row['post_title_seo']; ?>" style="text-decoration:none" class="h4">
                                <?= substr($row['post_title'], 0, 55) ?>...
                            </a>
                            <div class="artikel mt-2"><?= substr($row['post_content'], 0, 150) ?>... <a href="/news/<?= $row['post_title_seo']; ?>" style="text-decoration:none">Selengkapnya</a></div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-lg-5 rounded px-4">
                        <div class="row g-4">
                            <?php foreach ($news2 as $row) : ?>
                                <div class="col-12">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-5">
                                            <div class="position-relative rounded overflow-hidden ratio ratio-16x9">
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
                                                    <?= substr($row['post_title'], 0, 60) ?>...
                                                </a>
                                                <small><i class="fas fa-clock"></i> <?= $convertDate = date("d/m/Y", strtotime($row['post_time'])); ?></i> </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="row mt-4">
                                <a href="/news" class="btn btn-primary ms-2 py-2 h3" type="button">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Program Section-->
    <section class="page-section bg-light mt-4" id="program">
        <div class="container">
            <!-- Program Section Heading-->
            <h1 class="text-center text-uppercase text-secondary">Program Unggulan</h1>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line bg-campur"></div>
                <div class="divider-custom-icon"><i class="fas fa-tags"></i></div>
                <div class="divider-custom-line bg-campur"></div>
            </div>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner w-100">
                    <div class="carousel-item active">
                        <div class="col-md-4 px-2">
                            <div class="card card-body">
                                <img class="rounded img-fluid" src="<?php echo base_url('home') ?>/assets/img/program/programbedah.png" alt="...">
                                <div class="text-center mt-3 mb-2">
                                    <a href="https://www.youtube.com/@BatikTVNews" target="_blank" class="btn btn-primary mb-2" style="width: 61%;" type="button">
                                        <h5 class="mb-0">Berita Daerah</h5>
                                    </a>
                                    <div class="artikel biru">Senin - Sabtu Jam 14.00 & 19.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4 px-2">
                            <div class="card card-body">
                                <img class="rounded img-fluid" src="<?php echo base_url('home') ?>/assets/img/program/programhealing.png" alt="...">
                                <div class="text-center mt-3 mb-2">
                                    <a href="https://www.youtube.com/playlist?list=PL0c5AjrKK29omwylzQA-0C-QJIJKCY-7f" target="_blank" class="btn btn-primary mb-2" style="width: 60%;" type=" button">
                                        <h5 class="mb-0">Healing</h5>
                                    </a>
                                    <div class="artikel biru">Kamis & Minggu Jam 17.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4 px-2">
                            <div class="card card-body">
                                <img class="rounded img-fluid" src="<?php echo base_url('home') ?>/assets/img/program/programmatari.png" alt="...">
                                <div class="text-center mt-3 mb-2">
                                    <a href="https://www.youtube.com/playlist?list=PL0c5AjrKK29pbemvwx9GwEfd7Bq51z4tF" target="_blank" class="btn btn-primary mb-2" style="width: 60%;" type=" button">
                                        <h5 class="mb-0">Matari</h5>
                                    </a>
                                    <div class="artikel biru">Kamis (17.00) & Minggu (20.30)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4 px-2">
                            <div class="card card-body">
                                <img class="rounded img-fluid" src="<?php echo base_url('home') ?>/assets/img/program/programicipicip.png" alt="...">
                                <div class="text-center mt-3 mb-2">
                                    <a href="https://www.youtube.com/playlist?list=PL0c5AjrKK29okgjYjBozRxM2xmNJgVQ_z" target="_blank" class="btn btn-primary mb-2" style="width: 60%;" type=" button">
                                        <h5 class="mb-0">Icip-icip</h5>
                                    </a>
                                    <div class="artikel biru">Rabu (17.00) & Jum'at (18.00)</div>
                                </div>
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
        </div>
    </section>
    <section class="page-section bg-primary text-white mb-0" id="tentang">
        <div class="container">
            <!-- About Section Heading-->
            <h1 class="text-center text-uppercase text-white mt-4">Tentang</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-landmark"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-6">
                    <p class="lead tj"><?= $setelan->tentang1 ?></p>
                </div>
                <div class="col-lg-6">
                    <p class="lead tj"><?= $setelan->tentang2 ?></p>
                </div>
            </div>
        </div>
    </section>
    <div class="divider-full bg-campur"></div>
    <div class="bg-light pt-5 pb-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="card bg-secondary">
                        <div class="card-header shadow py-3">
                            <h5 class="m-0 font-weight-bold text-white text-center">Jadwal Tayang <?= $hari; ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive scroll-table">
                                <table class="table text-center table-bordered" id="dataTable" cellspacing="0">
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
                </div>
                <div class="col-lg-6 mb-5 py-3">
                    <a target="_blank" href="https://pasirkencana.pekalongankota.go.id/"><img class="img-fluid rounded iklan" src="../home/assets/img/iklan/pasirkencana.jpg" alt="Banner Iklan"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-4 pt-4" id="mitra">
        <h3 class="text-center text-uppercase text-secondary">Mitra Kami</h3>
        <div class="divider-custom">
            <div class="divider-custom-line bg-campur"></div>
        </div>
        <section class="customer-logos slider">
            <?php foreach ($mitra as $row) : ?>
                <div class="slide mx-3 mt-2">
                    <?php
                    if (!empty($row->logo)) : ?>
                        <img src="<?= base_url('../admin/img/mitra/' . $row->logo) ?>" width="100" alt="<?= $row->nama ?>" aria-label="<?= $row->nama ?>">
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </section>
    </div>
    <!-- Footer-->
    <footer class="footer text-center bg-campur">
        <div class="container">
            <div class="row">
                <!-- Footer Lokasi-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Lokasi</h4>
                    <p class="lead mb-0">
                        <?= $setelan->alamat ?><br>
                        Jam Operasional <?= $setelan->operasional ?>
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Media Sosial</h4>
                    <a target="_blank" class="btn btn-outline-light btn-social mx-1" aria-label="Facebook" href="<?= $setelan->facebook ?>"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a target="_blank" class="btn btn-outline-light btn-social mx-1" aria-label="Twitter" href="<?= $setelan->twitter ?>"><i class="fab fa-fw fa-twitter"></i></a>
                    <a target="_blank" class="btn btn-outline-light btn-social mx-1" aria-label="Instagram" href="<?= $setelan->instagram ?>"><i class="fab fa-fw fa-instagram"></i></a>
                    <a target="_blank" class="btn btn-outline-light btn-social mx-1" aria-label="Youtube" href="<?= $setelan->youtube ?>"><i class="fab fa-fw fa-youtube"></i></a>
                </div>
                <!-- Footer Jangkauan -->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Jangkauan Siaran</h4>
                    <p class="lead mb-0">
                        <?= $setelan->jangkauan ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; <a href="#" style="text-decoration:none"><b>Batik TV 2024</b></a></small></div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url('home') ?>/js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 8,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });

        $('.carousel .carousel-item').each(function() {
            var minPerSlide = 4;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < minPerSlide; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>
</body>

</html>