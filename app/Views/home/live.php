<div class="container-xxl pt-6">
    <div class="container-fluid pt-2">
        <div class="row">
            <div class="col-lg-8 mt-2">
                <div class="row bg-light rounded py-4 px-3">
                    <div>
                        <div class="d-flex">
                            <div class="spinner-grow spinner-grow-sm text-danger" role="status"></div>
                            <div class="h5"> &nbsp; Live Streaming</div>
                        </div>
                        <div class="divider-full bg-campur rounded mb-3" style="height: 0.25rem; max-width: 8rem;"></div>
                    </div>
                    <div class="px-2">
                        <?php if ($jam <= "21:00" && $jam >= "09:00") { ?>
                            <div class="ratio ratio-16x9 position-relative rounded overflow-hidden mb-4">
                                <!-- <img class="rounded img-fluid" src="<?php echo base_url('home') ?>/assets/img/btv.png" alt="..." width="98%"> -->
                                <iframe src="https://www.youtube.com/embed/live_stream?channel=UCfVhsa1PMBkqYQOqIojVjPA&autoplay=1&controls=0" frameborder="0" allowfullscreen allow="autoplay;"></iframe>
                            </div>
                        <?php } else { ?>
                            <div class="text-center">
                                <img class="mb-4 py-4 mx-4 py-4" src="<?php echo base_url('home') ?>/assets/img/stream.svg" alt="Streaming" width="70%">
                            </div>
                        <?php } ?>
                    </div>
                    <hr>
                    <div class="customer-logos slider">
                        <?php
                        for ($x = 0; $x <= 10; $x++) { ?>
                            <img class="rounded img-fluid mx-2" src="<?php echo base_url('home') ?>/assets/img/btv.png" alt="..." width="500">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 px-3 mt-2">
                <div id="table" class="bg-secondary rounded p-4 mb-4">
                    <div class="row scroll-table3">
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
                <img class="img-fluid rounded" src="../../../home/assets/img/banner4.png" alt="Banner Iklan">
            </div>
        </div>
    </div>
</div>