<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Tayang Hari Ini (<?= $hari; ?>)</h6>
            </div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('berhasil'); ?>
                    </div>
                <?php } ?>
                <div class="table-responsive" style="height:30rem">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 15rem;">Jam</th>
                                <th>Program</th>
                                <th>Episode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="/tayangan/simpan" method="post" enctype="multipart/form-data">
                                <?php
                                foreach ($tayang as $row) : ?>
                                    <tr>
                                        <td><input type="text" class="form-control text-center" id="jam" name="jam[]" value="<?= $row['jam'] ?>"></td>
                                        <td><input type="text" class="form-control" id="program" name="program[]" value="<?= $row['program'] ?>"></td>
                                        <td><select name="episode[]" class="form-select">
                                                <option value="-">--Pilih Episode--</option>
                                                <option value="Edisi <?= $tanggal; ?>">Edisi <?= $tanggal; ?></option>
                                                <option value="Kendala">Kendala</option>
                                                <?php foreach ($produksi as $row) : ?>
                                                    <option value="<?= $row['episode']; ?>"><?= $row['episode']; ?></option>
                                                <?php
                                                endforeach; ?>
                                            </select>
                                        </td>
                                    </tr>
                                <?php
                                endforeach; ?>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" name="submit" value="Simpan Data Tayangan" class="btn btn-primary mb-2">
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>