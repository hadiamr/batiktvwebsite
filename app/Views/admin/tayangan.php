<!-- DataTables -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Data <?php echo $judulTemp; ?>
            <?= $tanggal ?></h6>
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
                        <th>Jam</th>
                        <th>Nama Program</th>
                        <th>Episode</th>
                        <th style="width:10rem">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($tayangan as $row) : ?>
                        <tr>
                            <td class="text-center"><?= $row['jam']; ?></td>
                            <td><?= $row['nama_program']; ?></td>
                            <td><?= $row['episode']; ?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="/tayangan/edit/<?= $row['id']; ?>" class="btn btn-primary mx-2">Edit</a>
                                </div>
                            </td>
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