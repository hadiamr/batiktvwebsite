<div class="container-xxl pt-6">
    <div class="container-fluid pt-2">
        <div class="row">
            <div class="col-lg-8 px-3 my-2">
                <div class="row bg-light rounded px-3 pt-4 pb-2">
                    <div>
                        <div class="h5">Jadwal Tayang Program</div>
                        <div class="divider-full bg-campur rounded mb-3" style="height: 0.25rem; max-width: 8rem;"></div>
                    </div>
                    <div class="col-lg-6 scroll-table4 my-3">
                        <div class="table-responsive">
                            <table class="table text-center table-bordered" id="dataTable" cellspacing="0">
                                <div class="h6 mb-2 text-center">Jadwal Tayang Senin</div>
                                <thead>
                                    <tr class="bg-campur h6">
                                        <th>Jam</th>
                                        <th>Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($senin as $row) : ?>
                                        <tr class="text-black">
                                            <td><?= $row['jam']; ?></td>
                                            <td><?= $row['program']; ?></td>
                                        </tr>
                                </tbody>
                            <?php
                                    endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 scroll-table4 my-3">
                        <div class="table-responsive">
                            <table class="table text-center table-bordered" id="dataTable" cellspacing="0">
                                <div class="h6 mb-2 text-center">Jadwal Tayang Selasa</div>
                                <thead>
                                    <tr class="bg-campur h6">
                                        <th>Jam</th>
                                        <th>Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($selasa as $row) : ?>
                                        <tr class="text-black">
                                            <td><?= $row['jam']; ?></td>
                                            <td><?= $row['program']; ?></td>
                                        </tr>
                                </tbody>
                            <?php
                                    endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 scroll-table4 my-3">
                        <div class="table-responsive">
                            <table class="table text-center table-bordered" id="dataTable" cellspacing="0">
                                <div class="h6 mb-2 text-center">Jadwal Tayang Rabu</div>
                                <thead>
                                    <tr class="bg-campur h6">
                                        <th>Jam</th>
                                        <th>Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($rabu as $row) : ?>
                                        <tr class="text-black">
                                            <td><?= $row['jam']; ?></td>
                                            <td><?= $row['program']; ?></td>
                                        </tr>
                                </tbody>
                            <?php
                                    endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 scroll-table4 my-3">
                        <div class="table-responsive">
                            <table class="table text-center table-bordered" id="dataTable" cellspacing="0">
                                <div class="h6 mb-2 text-center">Jadwal Tayang Kamis</div>
                                <thead>
                                    <tr class="bg-campur h6">
                                        <th>Jam</th>
                                        <th>Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($kamis as $row) : ?>
                                        <tr class="text-black">
                                            <td><?= $row['jam']; ?></td>
                                            <td><?= $row['program']; ?></td>
                                        </tr>
                                </tbody>
                            <?php
                                    endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 scroll-table4 my-3">
                        <div class="table-responsive">
                            <table class="table text-center table-bordered" id="dataTable" cellspacing="0">
                                <div class="h6 mb-2 text-center">Jadwal Tayang Jum'at</div>
                                <thead>
                                    <tr class="bg-campur h6">
                                        <th>Jam</th>
                                        <th>Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($jumat as $row) : ?>
                                        <tr class="text-black">
                                            <td><?= $row['jam']; ?></td>
                                            <td><?= $row['program']; ?></td>
                                        </tr>
                                </tbody>
                            <?php
                                    endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 scroll-table4 my-3">
                        <div class="table-responsive">
                            <table class="table text-center table-bordered" id="dataTable" cellspacing="0">
                                <div class="h6 mb-2 text-center">Jadwal Tayang Sabtu</div>
                                <thead>
                                    <tr class="bg-campur h6">
                                        <th>Jam</th>
                                        <th>Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($sabtu as $row) : ?>
                                        <tr class="text-black">
                                            <td><?= $row['jam']; ?></td>
                                            <td><?= $row['program']; ?></td>
                                        </tr>
                                </tbody>
                            <?php
                                    endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 scroll-table4 my-3">
                        <div class="table-responsive">
                            <table class="table text-center table-bordered" id="dataTable" cellspacing="0">
                                <div class="h6 mb-2 text-center">Jadwal Tayang Minggu</div>
                                <thead>
                                    <tr class="bg-campur h6">
                                        <th>Jam</th>
                                        <th>Program</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($minggu as $row) : ?>
                                        <tr class="text-black">
                                            <td><?= $row['jam']; ?></td>
                                            <td><?= $row['program']; ?></td>
                                        </tr>
                                </tbody>
                            <?php
                                    endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 my-3">
                        <img class="img-fluid rounded" src="../../../home/assets/img/banner1.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 px-3 mt-2">
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
                <div class="bg-light rounded p-4 pt-0 mb-4">
                    <div class="h5 pt-4 pb-1">Berita Terkini
                        <hr>
                    </div>
                    <div class="row g-4">
                        <?php foreach ($news as $row) : ?>
                            <div class="col-12">
                                <div class="row g-4 align-items-center">
                                    <div class="col-5">
                                        <div class="ratio ratio-16x9 position-relative rounded overflow-hidden">
                                            <?php
                                            if (!empty($row['post_thumbnail'])) {
                                                echo '<img src="' . base_url("../home/assets/img/news/$row[post_thumbnail]") . '" width="100%" alt=' . $row['post_title'] .
                                                    '>';
                                            } else {
                                                echo '<img src="' . base_url("../home/assets/img/btv.png") . '" width="100%" alt=' . $row['post_title'] .
                                                    '>';
                                            }
                                            ?>
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
                <img class="img-fluid rounded mb-4" src="../../../home/assets/img/iklan/pasirkencana.jpg" alt="Banner Iklan">
                <img class="img-fluid rounded" src="../../../home/assets/img/banner4.png" alt="Banner Iklan">
            </div>
        </div>
    </div>
</div>