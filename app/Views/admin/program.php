<!-- DataTables -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Data <?php echo $judulTemp ?></h6>
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
        <div class="table-responsive" style="height:30rem">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Program</th>
                        <th>Deskripsi</th>
                        <th>Host</th>
                        <th>Kameramen</th>
                        <th>Editor</th>
                        <th>Tim</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($program as $row) : ?>
                        <tr>
                            <td class="text-center"><?php echo $nomor ?></td>
                            <td style="width: 190px;"><?= $row->nama_program; ?></td>
                            <td><?= $row->deskripsi; ?></td>
                            <td>
                                <?php if ($row->host1 != "") {
                                ?><?= $row->host1;
                                }
                                if ($row->host2 != "") {
                                    ?>, <?= $row->host2;
                                    }
                                    if ($row->host3 != "") {
                                        ?>, <?= $row->host3;
                                        } ?>
                            </td>
                            <td>
                                <?php if ($row->cam1 != "") {
                                ?><?= $row->cam1;
                                }
                                if ($row->cam2 != "") {
                                    ?>, <?= $row->cam2;
                                    }
                                    if ($row->cam3 != "") {
                                        ?>, <?= $row->cam3;
                                        } ?>
                            </td>
                            <td><?= $row->editor; ?></td>
                            <td style="width: 90px;"><?= $row->tim; ?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="/program/edit/<?= $row->id; ?>" class="btn btn-primary mx-2"><i class="fa fa-pen-square"></i></a>
                                    <a href="/program/hapus/<?= $row->id; ?>" class="btn btn-primary"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php
                        $nomor++;
                    endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('no', 'bootstrap_pagination') ?>
        </div>
    </div>
</div>

</div>
</div>