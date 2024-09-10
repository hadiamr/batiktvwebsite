<!-- DataTables -->

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <form action="" method="GET">
            <div class="d-flex float-right">
                <input type="text" name="keyword" value="<?php echo $keyword ?>" class="form-control mx-2" placeholder="Pencarian...">
                <button type="submit" class="btn btn-primary shadow-sm"><i class="fas fa-search"></i></button>
            </div>
            <div class="d-flex float-right"><input type="month" class="form-control" name="bulan" value="<?php echo $bulan ?>">
            </div>
        </form>
        <h6 class="my-2 font-weight-bold text-dark">Data <?php echo $judulTemp ?></h6>
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
                        <th>Penulis</th>
                        <th>Waktu</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $page = isset($_GET['page_no']) ? $_GET['page_no'] : 1;
                    $nomor = 1 + (15 * ($page - 1));
                    foreach ($news as $row) : ?>
                        <tr>
                            <td><?= $nomor++ ?></td>
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
                                    <a target="_blank" href="/news/<?= $row->post_title_seo; ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    <a href="/artikel/edit/<?= $row->post_id; ?>" class="btn btn-primary mx-2"><i class="fa fa-pen-square"></i></a>
                                    <a href="/artikel/hapus/<?= $row->post_id; ?>" class="btn btn-primary"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php
                    endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('no', 'bootstrap_pagination'); ?>
        </div>
    </div>
</div>

</div>
</div>