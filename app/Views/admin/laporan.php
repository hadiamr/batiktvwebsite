<!-- DataTables -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Data <?php echo $judulTemp ?> | <?= date("M - Y", strtotime($bulan)); ?><a href="/laporan/pdf/<?= $bulan ?>" class="btn btn-primary mx-2">Download PDF</a></h6>
        <form action="/laporan/view" method="POST" enctype="multipart/form-data">
            <div class="d-flex"><input type="month" class="form-control mx-2" name="bulan" value="<?= $bulan ?>" style="width: 180px;">
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
        <div class="table-responsive" style="height:30rem">
            <div class="col">
                <div class="row">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" class="align-middle" rowspan="2">Nama Program</th>
                                <th scope="col" colspan="5">Episode</th>
                            </tr>
                            <tr class="text-center">
                                <th scope="col">Minggu 1</th>
                                <th scope="col">Minggu 2</th>
                                <th scope="col">Minggu 3</th>
                                <th scope="col">Minggu 4</th>
                                <th scope="col">Minggu 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($query as $value) :
                                if (date("Y-m", strtotime($value->bulan)) == $bulan) { ?>
                                    <tr>
                                        <th scope="row"><?= $value->nama; ?></th>
                                        <td><?= $value->minggu_1; ?></td>
                                        <td><?= $value->minggu_2; ?></td>
                                        <td><?= $value->minggu_3; ?></td>
                                        <td><?= $value->minggu_4; ?></td>
                                        <td><?= $value->minggu_5; ?></td>
                                    </tr>
                            <?php }
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>