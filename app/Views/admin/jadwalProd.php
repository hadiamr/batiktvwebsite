<!-- DataTables -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark"><?= $judulTemp ?> | <?= date("d/m/Y", strtotime($tanggal)) ?></h6>
        <form action="" method="GET" enctype="multipart/form-data">
            <div class="d-flex"><input type="date" class="form-control mx-2" name="tanggal" value="<?= $tanggal ?>" style="width: 150px;">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i></button>
            </div>
        </form>
    </div>
    <div class="card-body">
        <!--Isi -->
        <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
            <div class="alert alert-success">
                <?php echo session()->getFlashdata('berhasil'); ?>
            </div>
        <?php } ?>
        <?php
        $errors = $validation->getErrors();
        if (!empty($errors)) {
            echo $validation->listErrors();
        }
        ?>
        <div class="table-responsive">
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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($jadwal as $row) :
                        if (date("Y-m-d", strtotime($row['waktu'])) == $tanggal) { ?>
                            <tr>
                                <td><?php echo $nomor ?></td>
                                <td><?= $convertDate = date("d-m-Y", strtotime($row['waktu'])); ?></td>
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
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="/produksi/editJadwal/<?= $row['id_prod']; ?>" class="btn btn-primary mr-2"><i class="fa fa-pen-square"></i></a>
                                        <a href="/produksi/hapusJadwal/<?= $row['id_prod']; ?>" class="btn btn-primary"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
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
        <div class="table-responsive" style="height:30rem">
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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($jadwal as $row) :
                        if (date("ymd", strtotime($row['waktu'])) >= $sekarang) { ?>
                            <tr>
                                <td><?php echo $nomor ?></td>
                                <td><?= $convertDate = date("d-M-Y", strtotime($row['waktu'])); ?></td>
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
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="/produksi/editJadwal/<?= $row['id_prod']; ?>" class="btn btn-primary mr-2"><i class="fa fa-pen-square"></i></a>
                                        <a href="/produksi/hapusJadwal/<?= $row['id_prod']; ?>" class="btn btn-primary"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
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
</div>