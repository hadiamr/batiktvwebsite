<!-- DataTables -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Data <?php echo $judulTemp ?></h6>
    </div>
    <div class="card-body">
        <!--Isi -->
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Tim</th>
                        <th>Program</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($tim as $row) : ?>
                        <tr>
                            <td class="text-center"><?php echo $nomor ?></td>
                            <td><?= $row['nama_tim']; ?></td>
                            <td> <?php foreach ($program as $row2) :
                                        if ($row['nama_tim'] == $row2['tim']) {
                                            echo $row2['nama_program']; ?>,
                                <?php }
                                    endforeach;
                                ?>-
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="/tim/edit/<?= $row['id']; ?>" class="btn btn-primary mx-2">Edit</a>
                                    <a href="/tim/hapus/<?= $row['id']; ?>" class="btn btn-primary">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php
                        $nomor++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</div>