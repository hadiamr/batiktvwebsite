<div class="container-xxl pt-6">
    <div class="container-fluid pt-2">
        <div class="row">
            <div class="col-lg-8 mt-2">
                <div class="row bg-light rounded py-4">
                    <div class="mx-2">
                        <div class="mb-3">
                            <div class="h5">Live Streaming TV</div>
                            <div class="spinner-border spinner-border-sm biru" role="status">
                                <span class="sr-only"></span>
                            </div> Tunggu update selanjutnya...
                        </div>
                        <div class="divider-full bg-campur rounded mb-3" style="height: 0.25rem; max-width: 8rem;"></div>
                    </div>
                    <div class="text-center mb-2 rounded">
                        <!-- <img class="rounded img-fluid" src="<?php echo base_url('home') ?>/assets/img/btv.png" alt="..." width="98%"> -->
                        <iframe width="820" height="462" src="https://www.youtube.com/embed/SI-7Jkr9ra8?autoplay=1&autohide=0&controls=0&disablekb=0&modestbranding=0&fs=0&rel=0&showinfo=0&enablejsapi=0&origin=https%3A%2F%2Fwww.batiktv.id&widgetid=0" title="Live Streaming" frameborder="0" allow="autoplay;"></iframe>
                    </div>
                    <div class="customer-logos slider">
                        <?php
                        for ($x = 0; $x <= 10; $x++) { ?>
                            <div class="slide mx-2 mt-2">
                                <img class="rounded img-fluid" src="<?php echo base_url('home') ?>/assets/img/btv.png" alt="..." width="500">
                            </div>
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
            </div>
        </div>
    </div>
</div>