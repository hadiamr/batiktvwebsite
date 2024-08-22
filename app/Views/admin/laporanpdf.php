<!-- DataTables -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h3 class="m-0 font-weight-bold text-dark">Data Laporan Tayang Bulan <?= date("M - Y", strtotime($bulan)); ?></h3>
    </div>
    <div class="card-body">
        <!--Isi -->
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