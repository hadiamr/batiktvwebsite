<!-- DataTables -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Data <?php echo $judulTemp ?> <a href="/tayang/pdf" class="btn btn-primary mx-2">Download PDF</a></h6>
    </div>
    <div class="card-body">
        <!--Isi -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark text-center">Senin</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive scroll-table">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>Jam</th>
                                        <th>Program</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($senin as $row) : ?>
                                        <tr>
                                            <td><?= $row['jam']; ?></td>
                                            <?php if ($row['kategori'] == 'baru') { ?>
                                                <td class="bg-birunom text-white"><?= $row['program']; ?></td>
                                            <?php } else { ?>
                                                <td><?= $row['program']; ?></td>
                                            <?php } ?>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="/tayang/edit/<?= $row['id_tayang']; ?>" class="btn btn-primary mx-2">Edit</a>
                                                    <a href="/tayang/hapus/<?= $row['id_tayang']; ?>" class="btn btn-primary">Hapus</a>
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
            <div class="col-xl-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark text-center">Selasa</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive scroll-table">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>Jam</th>
                                        <th>Program</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($selasa as $row) : ?>
                                        <tr>
                                            <td><?= $row['jam']; ?></td>
                                            <?php if ($row['kategori'] == 'baru') { ?>
                                                <td class="bg-birunom text-white"><?= $row['program']; ?></td>
                                            <?php } else { ?>
                                                <td><?= $row['program']; ?></td>
                                            <?php } ?>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="/tayang/edit/<?= $row['id_tayang']; ?>" class="btn btn-primary mx-2">Edit</a>
                                                    <a href="/tayang/hapus/<?= $row['id_tayang']; ?>" class="btn btn-primary">Hapus</a>
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
        <div class="row">
            <div class="col-xl-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark text-center">Rabu</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive scroll-table">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>Jam</th>
                                        <th>Program</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($rabu as $row) : ?>
                                        <tr>
                                            <td><?= $row['jam']; ?></td>
                                            <?php if ($row['kategori'] == 'baru') { ?>
                                                <td class="bg-birunom text-white"><?= $row['program']; ?></td>
                                            <?php } else { ?>
                                                <td><?= $row['program']; ?></td>
                                            <?php } ?>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="/tayang/edit/<?= $row['id_tayang']; ?>" class="btn btn-primary mx-2">Edit</a>
                                                    <a href="/tayang/hapus/<?= $row['id_tayang']; ?>" class="btn btn-primary">Hapus</a>
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
            <div class="col-xl-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark text-center">Kamis</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive scroll-table">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>Jam</th>
                                        <th>Program</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($kamis as $row) : ?>
                                        <tr>
                                            <td><?= $row['jam']; ?></td>
                                            <?php if ($row['kategori'] == 'baru') { ?>
                                                <td class="bg-birunom text-white"><?= $row['program']; ?></td>
                                            <?php } else { ?>
                                                <td><?= $row['program']; ?></td>
                                            <?php } ?>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="/tayang/edit/<?= $row['id_tayang']; ?>" class="btn btn-primary mx-2">Edit</a>
                                                    <a href="/tayang/hapus/<?= $row['id_tayang']; ?>" class="btn btn-primary">Hapus</a>
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

        <div class="row">
            <div class="col-xl-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark text-center">Jum'at</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive scroll-table">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>Jam</th>
                                        <th>Program</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($jumat as $row) : ?>
                                        <tr>
                                            <td><?= $row['jam']; ?></td>
                                            <?php if ($row['kategori'] == 'baru') { ?>
                                                <td class="bg-birunom text-white"><?= $row['program']; ?></td>
                                            <?php } else { ?>
                                                <td><?= $row['program']; ?></td>
                                            <?php } ?>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="/tayang/edit/<?= $row['id_tayang']; ?>" class="btn btn-primary mx-2">Edit</a>
                                                    <a href="/tayang/hapus/<?= $row['id_tayang']; ?>" class="btn btn-primary">Hapus</a>
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
            <div class="col-xl-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark text-center">Sabtu</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive scroll-table">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>Jam</th>
                                        <th>Program</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($sabtu as $row) : ?>
                                        <tr>
                                            <td><?= $row['jam']; ?></td>
                                            <?php if ($row['kategori'] == 'baru') { ?>
                                                <td class="bg-birunom text-white"><?= $row['program']; ?></td>
                                            <?php } else { ?>
                                                <td><?= $row['program']; ?></td>
                                            <?php } ?>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="/tayang/edit/<?= $row['id_tayang']; ?>" class="btn btn-primary mx-2">Edit</a>
                                                    <a href="/tayang/hapus/<?= $row['id_tayang']; ?>" class="btn btn-primary">Hapus</a>
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

        <div class="row">
            <div class="col-xl-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark text-center">Minggu</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive scroll-table">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>Jam</th>
                                        <th>Program</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($minggu as $row) : ?>
                                        <tr>
                                            <td><?= $row['jam']; ?></td>
                                            <?php if ($row['kategori'] == 'baru') { ?>
                                                <td class="bg-birunom text-white"><?= $row['program']; ?></td>
                                            <?php } else { ?>
                                                <td><?= $row['program']; ?></td>
                                            <?php } ?>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="/tayang/edit/<?= $row['id_tayang']; ?>" class="btn btn-primary mx-2">Edit</a>
                                                    <a href="/tayang/hapus/<?= $row['id_tayang']; ?>" class="btn btn-primary">Hapus</a>
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
    </div>
</div>

</div>
</div>