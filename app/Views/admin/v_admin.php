<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Agenda Hari Ini ( <?= $hari ?>, <?= $convertDate = date("d/m/Y", strtotime($tanggal)); ?> )</h6>
            </div>
            <div class="card-body">
                <!--Isi -->
                <div class="table-responsive" style="max-height:20rem">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Produksi</th>
                                <th>Tim</th>
                                <th>Episode</th>
                                <th>Tempat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            foreach ($jadwal as $row) :
                                if (date("Y-m-d", strtotime($row['waktu'])) == $tanggal) { ?>
                                    <tr>
                                        <td><?php echo $nomor ?></td>
                                        <td><?= $convertDate = date("H:i", strtotime($row['waktu'])); ?></td>
                                        <td><?= $row['nama_program']; ?></td>
                                        <td><?php
                                            if ($row['host1'] != "") {
                                                echo $row['host1'];
                                            ?>, <?php }
                                            if ($row['host2'] != "") {
                                                ?> <?= $row['host2'];
                                                    ?>, <?php }
                                                    if ($row['host3'] != "") {
                                                        ?> <?= $row['host3'];
                                                            ?>, <?php } ?>
                                        <?= $row['tim'];
                                        if ($row['driver'] != "") {
                                        ?>, <?= $row['driver'];
                                        } ?>
                                        </td>
                                        <td><?= $row['episode']; ?></td>
                                        <td><?= $row['tempat']; ?></td>
                                    </tr>
                            <?php
                                    $nomor++;
                                }
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-dark">Agenda Produksi Kedepan</h6>
            </div>
            <div class="card-body">
                <!--Isi -->
                <div class="table-responsive" style="height:20rem">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Agenda Produksi</th>
                                <th>Tim</th>
                                <th>Episode</th>
                                <th>Tempat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            foreach ($jadwal as $row) :
                                if (date("ymd", strtotime($row['waktu'])) >= $sekarang) { ?>
                                    <tr>
                                        <td><?php echo $nomor ?></td>
                                        <td><?= $convertDate = date("d/m/Y", strtotime($row['waktu'])); ?></td>
                                        <td><?= $convertDate = date("H:i", strtotime($row['waktu'])); ?> WIB</td>
                                        <td><?= $row['nama_program']; ?></td>
                                        <td><?php
                                            if ($row['host1'] != "") {
                                                echo $row['host1'];
                                            ?>, <?php }
                                            if ($row['host2'] != "") {
                                                ?> <?= $row['host2'];
                                                    ?>, <?php }
                                                    if ($row['host3'] != "") {
                                                        ?> <?= $row['host3'];
                                                            ?>, <?php } ?>
                                        <?= $row['tim'];
                                        if ($row['driver'] != "") {
                                        ?>, <?= $row['driver'];
                                        } ?>
                                        </td>
                                        <td><?= $row['episode']; ?></td>
                                        <td><?= $row['tempat']; ?></td>
                                    </tr>
                            <?php
                                    $nomor++;
                                }
                            endforeach; ?>
                            <?php
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Tayang Hari Ini (<?= $hari; ?>)</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="max-height:35rem">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Jam</th>
                                <th>Program</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($tayang as $row) : ?>
                                <tr>
                                    <td><?= $row['jam']; ?></td>
                                    <td><?= $row['program']; ?></td>
                                </tr>
                            <?php
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
</div>