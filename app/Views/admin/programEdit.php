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
        <?= form_open_multipart(base_url('/program/update/' . $program->id)); ?>
        <input type="hidden" name="id" class="form-control" value="<?= $program->id ?>">
        <div class="mb-3">
            <label for="nama_program" class="form-label">Nama Program</label>
            <input type="text" class="form-control" id="nama_program" placeholder="Masukan Nama Program" name="nama_program" value="<?= $program->nama_program ?>" required>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="host1" class="form-label">Presenter / Host 1</label>
                <select name="host1" class="form-select">
                    <option value="">--Pilih Host--</option>
                    <?php foreach ($host as $row) : ?>
                        <?php if ($program->host1 == $row['username']) { ?>
                            <option value="<?= $row['username']; ?>" selected><?= $row['username']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['username']; ?>"><?= $row['username']; ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>
            <div class="col mb-3">
                <label for="host2" class="form-label">Presenter / Host 2</label>
                <select name="host2" class="form-select">
                    <option value="">--Pilih Host--</option>
                    <?php foreach ($host as $row) : ?>
                        <?php if ($program->host2 == $row['username']) { ?>
                            <option value="<?= $row['username']; ?>" selected><?= $row['username']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['username']; ?>"><?= $row['username']; ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>
            <div class="col mb-3">
                <label for="host3" class="form-label">Presenter / Host 3</label>
                <select name="host3" class="form-select">
                    <option value="">--Pilih Host--</option>
                    <?php foreach ($host as $row) : ?>
                        <?php if ($program->host3 == $row['username']) { ?>
                            <option value="<?= $row['username']; ?>" selected><?= $row['username']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['username']; ?>"><?= $row['username']; ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>
            <div class="col mb-3">
                <label for="tim" class="form-label">Tim</label>
                <select name="tim" class="form-select">
                    <option value="">--Pilih Tim--</option>
                    <?php foreach ($tim as $row) : ?>
                        <?php if ($program->tim == $row['nama_tim']) { ?>
                            <option value="<?= $row['nama_tim']; ?>" selected><?= $row['nama_tim']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['nama_tim']; ?>"><?= $row['nama_tim']; ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="cam1" class="form-label">Kameramen 1</label>
                <select name="cam1" class="form-select">
                    <option value="">--Pilih Kameramen--</option>
                    <?php foreach ($cam as $row) : ?>
                        <?php if ($program->cam1 == $row['username']) { ?>
                            <option value="<?= $row['username']; ?>" selected><?= $row['username']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['username']; ?>"><?= $row['username']; ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>
            <div class="col mb-3">
                <label for="cam2" class="form-label">Kameramen 2</label>
                <select name="cam2" class="form-select">
                    <option value="">--Pilih Kameramen--</option>
                    <?php foreach ($cam as $row) : ?>
                        <?php if ($program->cam2 == $row['username']) { ?>
                            <option value="<?= $row['username']; ?>" selected><?= $row['username']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['username']; ?>"><?= $row['username']; ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>
            <div class="col mb-3">
                <label for="cam3" class="form-label">Kameramen 3</label>
                <select name="cam3" class="form-select">
                    <option value="">--Pilih Kameramen--</option>
                    <?php foreach ($cam as $row) : ?>
                        <?php if ($program->cam3 == $row['username']) { ?>
                            <option value="<?= $row['username']; ?>" selected><?= $row['username']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['username']; ?>"><?= $row['username']; ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>
            <div class="col mb-3">
                <label for="editor" class="form-label">Editor</label>
                <select name="editor" class="form-select">
                    <option value="">--Pilih Editor--</option>
                    <?php foreach ($editor as $row) : ?>
                        <?php if ($program->editor == $row['username']) { ?>
                            <option value="<?= $row['username']; ?>" selected><?= $row['username']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['username']; ?>"><?= $row['username']; ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Program</label>
            <textarea class="form-control" id="deskripsi" placeholder="Masukan Deskripsi" name="deskripsi"><?= $program->deskripsi ?></textarea>
        </div>
        <div>
            <button class="btn btn-secondary" type="button" id="back">Batal</button>
            <input type="submit" name="submit" value="Edit Data" class="btn btn-primary">
        </div>
        <?= form_close(); ?>
    </div>
</div>