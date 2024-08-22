<!-- DataTables -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Data <?php echo $judulTemp ?></h6>
    </div>
    <div class="card-body">
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
        <!--Isi -->
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Mitra</th>
                        <th>logo</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($mitra as $row) : ?>
                        <tr>
                            <td class="text-center"><?php echo $nomor ?></td>
                            <td><?= $row->nama; ?></td>
                            <td><?php
                                if (!empty($row->logo)) {
                                    echo '<img src="' . base_url("../admin/img/mitra/$row->logo") . '" width="100">';
                                } ?></td>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="/mitra/edit/<?= $row->id; ?>" class="btn btn-primary mx-2">Edit</a>
                                    <a href="/mitra/hapus/<?= $row->id; ?>" class="btn btn-primary">Hapus</a>
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