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
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Thumbnail</th>
                        <th>Author</th>
                        <th>Waktu</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($news as $row) : ?>
                        <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $row->post_title; ?></td>
                            <td>
                                <div class="ratio ratio-16x9 position-relative rounded overflow-hidden">
                                    <?php
                                    if (!empty($row->post_thumbnail)) {
                                        echo '<img src="' . base_url("../home/assets/img/news/$row->post_thumbnail") . '" width="100">';
                                    } ?></div>
                            </td>
                            <td><?= $row->author; ?></td>
                            <td><?= $convertDate = date("d/m/y H:i", strtotime($row->post_time)); ?> WIB</td>
                            <td><?= $row->post_status; ?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a target="_blank" href="/news/<?= $row->post_title_seo; ?>" class="btn btn-primary">View</a>
                                    <a href="/artikel/edit/<?= $row->post_id; ?>" class="btn btn-primary mx-2">Edit</a>
                                    <a href="/artikel/hapus/<?= $row->post_id; ?>" class="btn btn-primary">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php
                        $nomor++;
                    endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('no', 'bootstrap_pagination'); ?>
        </div>
    </div>
</div>

</div>
</div>