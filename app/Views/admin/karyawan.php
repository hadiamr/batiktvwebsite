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
                        <th>Nama Lengkap</th>
                        <th>Handphone</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($karyawan as $row) : ?>
                        <tr>
                            <td class="text-center"><?php echo $nomor ?></td>
                            <td><?= $row->nama_lengkap; ?></td>
                            <td><?= $row->phone; ?></td>
                            <td><?= $row->jabatan1;
                                if ($row->jabatan2 != "") {
                                ?>, <?= $row->jabatan2;
                                }
                                if ($row->jabatan3 != "") {
                                    ?>, <?= $row->jabatan3;
                                    } ?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="/karyawan/edit/<?= $row->username; ?>" class="btn btn-primary mx-2">Edit</a>
                                    <a href="/karyawan/hapus/<?= $row->id; ?>" class="btn btn-primary">Hapus</a>
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