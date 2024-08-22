<!-- DataTables -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Data <?php echo $judulTemp ?></h6>
    </div>
    <div class="card-body">
        <!--Isi -->
        <div class="table-responsive" style="height:30rem">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($jabatan as $row) : ?>
                        <tr>
                            <td class="text-center"><?php echo $nomor ?></td>
                            <td><?= $row->nama_jabatan; ?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="/jabatan/edit/<?= $row->id; ?>" class="btn btn-primary mx-2">Edit</a>
                                    <a href="/jabatan/hapus/<?= $row->id; ?>" class="btn btn-primary">Hapus</a>
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