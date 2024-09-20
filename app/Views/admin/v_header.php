<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Batik TV Admin">
    <meta name="author" content="Batik TV">

    <title><?php echo $judulTemp ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('home') ?>/assets/favicon.png" />

    <!-- Custom fonts-->
    <link href="<?php echo base_url('admin') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom style-->
    <link href="<?php echo base_url('admin') ?>/css/sb-admin-2.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="m-5"><img class="img-fluid mt-2" width="80" src="<?php echo base_url('home') ?>/assets/img/logo.svg" alt="Batik TV"><sup>Admin v1.0</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <?php if (session('akun_role') == 'superadmin' || session('akun_role') == 'admin' || session('akun_role') == 'wartawan') { ?>
                <!-- Heading -->
                <div class="sidebar-heading">
                    Utama
                </div>
                <!-- Nav Item - Produksi Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNews" aria-expanded="true" aria-controls="collapseNews">
                        <i class="fas fa-pen-to-square"></i>
                        <span>Artikel</span>
                    </a>
                    <div id="collapseNews" class="collapse" aria-labelledby="headingNews" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="/artikel/tambah">Tambah</a>
                            <a class="collapse-item" href="/artikel/news">Artikel</a>
                            <a class="collapse-item" href="/artikel/page">Halaman</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">

            <?php }
            if (session('akun_role') == 'superadmin' || session('akun_role') == 'admin') { ?>
                <!-- Heading -->
                <div class="sidebar-heading">
                    Umum
                </div>

                <!-- Nav Item - Produksi Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProd" aria-expanded="true" aria-controls="collapseProd">
                        <i class="fas fa-calendar"></i>
                        <span>Program</span>
                    </a>
                    <div id="collapseProd" class="collapse" aria-labelledby="headingProd" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="/produksi/jadwal">Jadwal Produksi</a>
                            <a class="collapse-item" href="/tayang/view">Jadwal Tayang</a>
                            <a class="collapse-item" href="/tayangan/view">Jadwal Tayangan</a>
                            <a class="collapse-item" href="/laporan/view">Laporan Tayang</a>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Data Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseData" aria-expanded="true" aria-controls="collapseData">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Data</span>
                    </a>
                    <div id="collapseData" class="collapse" aria-labelledby="headingData" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="/karyawan/view">Karyawan</a>
                            <a class="collapse-item" href="/program/view">Program</a>
                            <a class="collapse-item" href="/tim/view">Tim</a>
                            <a class="collapse-item" href="/jabatan/view">Jabatan</a>
                            <a class="collapse-item" href="/mitra/view">Mitra</a>
                        </div>
                    </div>
                </li>
            <?php }
            if (session('akun_role') == 'superadmin') { ?>
                <!-- Nav Item - Pengguna -->
                <li class="nav-item">
                    <a class="nav-link" href="/pengguna/view">
                        <i class="fa-solid fa-user"></i>
                        <span>Data Pengguna</span></a>
                </li>
            <?php }
            if (session('akun_role') == 'superadmin' || session('akun_role') == 'admin') { ?>
                <!-- Nav Item - Setelan -->
                <li class="nav-item">
                    <a class="nav-link" href="/setelan/view">
                        <i class="fa-solid fa-gear"></i>
                        <span>Setelan</span></a>
                </li>
            <?php } ?>
            <!-- Nav Item - Website -->
            <li class="nav-item">
                <a target="_blank" class="nav-link" href="/">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    <span>Website</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo session('akun_nama_lengkap') ?></span>
                                <?php if (!empty(session('akun_foto'))) { ?>
                                    <img class="img-profile rounded-circle" src="<?php echo base_url('admin/img/user/' . session('akun_foto')) ?>">
                                <?php } else { ?>
                                    <img class="img-profile rounded-circle" src="<?php echo base_url('admin') ?>/img/profiles.ico">
                                <?php }  ?>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/profil/view">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $judulTemp ?></h1>
                        <?php if ($tambah !== "yes") { ?> <a href="
                            <?php if ($jenis == "produksi") { ?> /produksi/tambahJadwal
                            <?php } elseif ($jenis == "tayang") { ?>/tayang/tambah
                            <?php } elseif ($jenis == "laporan") { ?>/laporan/tambah
                            <?php } elseif ($jenis == "karyawan") { ?>/karyawan/tambah
                            <?php } elseif ($jenis == "program") { ?>/program/tambah
                            <?php } elseif ($jenis == "tim") { ?>/tim/tambah
                            <?php } elseif ($jenis == "news") { ?>/artikel/tambah
                            <?php } elseif ($jenis == "mitra") { ?>/mitra/tambah
                            <?php } elseif ($jenis == "pengguna") { ?>/pengguna/tambah
                            <?php } elseif ($jenis == "tayangan") { ?>/tayangan/tambah
                            <?php } else { ?>/artikel/tambah
                        <?php } ?>" class="d-sm-flex btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah <?php echo $judulTemp ?></a>
                        <?php } ?>
                    </div>