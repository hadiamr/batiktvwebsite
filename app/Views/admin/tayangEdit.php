<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Edit Data</h6>
    </div>
    <div class="card-body">
        <!--Isi -->
        <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
            <div class="alert alert-success">
                <?php echo session()->getFlashdata('berhasil'); ?>
            </div>
        <?php } ?>
        <?= form_open_multipart(base_url('/tayang/update/' . $tayang->id_tayang)); ?>
        <input type="hidden" name="id_tayang" class="form-control" value="<?= $tayang->id_tayang ?>">
        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="hari" class="form-label">Hari</label>
                <select name="hari" class="form-select" required>
                    <option>--Pilih Hari--</option>
                    <?php foreach ($hari as $row) : ?>
                        <?php if ($tayang->hari == $row['nama_hari']) { ?>
                            <option value="<?= $row['nama_hari']; ?>" selected><?= $row['nama_hari']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['nama_hari']; ?>"><?= $row['nama_hari']; ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>
            <div class="col-lg-3">
                <label for="jam" class="form-label">Jam</label>
                <input type="time" class="form-control" id="jam" name="jam" value="<?= $tayang->jam ?>" required>
            </div>
            <div class="col-lg-6">
                <label for="program" class="form-label">Program</label>
                <div class="row">
                    <div class="col">
                        <select name="program" class="form-select" required>
                            <option value="">--Pilih Program--</option>
                            <?php foreach ($program as $row) : ?>
                                <?php if ($tayang->program == $row['nama_program']) { ?>
                                    <option value="<?= $row['nama_program']; ?>" selected><?= $row['nama_program']; ?></option>
                                <?php } else { ?>
                                    <option value="<?= $row['nama_program']; ?>"><?= $row['nama_program']; ?></option>
                            <?php }
                            endforeach; ?>
                        </select>
                    </div>
                    <div class="col">
                        <?php if ($tayang->kategori == 'baru') { ?>
                            <input type="checkbox" class="btn-check" id="btn-check-outlined" name="kategori" autocomplete="off" value="baru" checked>
                        <?php } else { ?>
                            <input type="checkbox" class="btn-check" id="btn-check-outlined" name="kategori" autocomplete="off" value="baru">
                        <?php
                        } ?>
                        <label class="btn btn-outline-primary" for="btn-check-outlined">Episode Baru</label>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-secondary" type="button" id="back">Batal</button>
            <input type="submit" name="submit" value="Edit Data" class="btn btn-primary">
        </div>
        <?= form_close(); ?>
    </div>
</div>