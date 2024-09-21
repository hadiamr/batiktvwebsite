<div class="container-xxl pt-6">
    <div class="container-fluid pt-2">
        <div class="row">
            <div class="col-lg-8 px-3 my-4">
                <div class="spinner-border spinner-border-sm biru" role="status">
                    <span class="sr-only"></span>
                </div> Tunggu update selanjutnya...
            </div>
            <div class="col-lg-4 px-3">
                <div class="bg-light rounded p-4 pt-0 mb-4">
                    <div class="h5 pt-4 pb-1">Berita Terkini
                        <hr>
                    </div>
                    <div class="row g-4 scroll-table3">
                        <?php foreach ($news as $row) : ?>
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
                <a target="_blank" href="https://pasirkencana.pekalongankota.go.id/"><img class="img-fluid rounded iklan mb-4" src="../home/assets/img/iklan/pasirkencana.jpg" alt="Banner Iklan"></a>
                <img class="img-fluid rounded" src="../../../home/assets/img/banner4.png" alt="Banner Iklan">
            </div>
        </div>
    </div>
</div>