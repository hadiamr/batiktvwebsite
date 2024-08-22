<div class="row">
    <div class="col">
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
                <?= form_open_multipart(base_url('/tayangan/update/' . $tayangan->id)); ?>
                <input type="hidden" name="id" class="form-control" value="<?= $tayangan->id ?>">
                <div class="row">
                    <div class="col mb-3">
                        <label for="jam" class="form-label">Jam</label>
                        <input type="text" class="form-control" id="jam" placeholder="Masukan Jam" name="jam" value="<?= $tayangan->jam ?>" disabled>
                    </div>
                    <div class="col mb-3">
                        <label for="program" class="form-label">Nama Program</label>
                        <input type="text" class="form-control" id="program" placeholder="Masukan Program" name="program" value="<?= $tayangan->nama_program ?>" disabled>
                    </div>
                    <div class="col mb-3">
                        <label for="episode" class="form-label">Episode</label>
                        <select name="episode" class="form-select">
                            <option value="">-</option>
                            <option value="Edisi <?= $tanggal; ?>">Edisi <?= $tanggal; ?></option>
                            <option value="Kendala">Kendala</option>
                            <?php
                            foreach ($episode as $row) : ?>
                                <?php if ($tayangan->episode == $row['episode']) { ?>
                                    <option value="<?= $row['episode']; ?>" selected><?= $row['episode']; ?></option>
                                <?php } else { ?>
                                    <option value="<?= $row['episode']; ?>"><?= $row['episode']; ?></option>
                            <?php }
                            endforeach; ?>
                        </select>
                    </div>
                </div>
                <div>
                    <button class="btn btn-secondary" type="button" id="back">Batal</button>
                    <input type="submit" name="submit" value="Edit Data" class="btn btn-primary">
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>

</div>
</div>