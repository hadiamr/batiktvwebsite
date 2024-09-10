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
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($pengguna as $row) : ?>
                        <tr>
                            <td class="text-center"><?php echo $nomor ?></td>
                            <td><?= $row->nama_lengkap; ?></td>
                            <td><?= $row->username; ?></td>
                            <td><?= $row->password; ?></td>
                            <td><?= $row->role; ?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="/pengguna/edit/<?= $row->username; ?>" class="btn btn-primary mx-2"><i class="fa fa-pen-square"></i></a>
                                    <a href="/pengguna/hapus/<?= $row->id; ?>" class="btn btn-primary"><i class="fa fa-trash"></i></a>
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