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
        <?= form_open_multipart(base_url('/karyawan/update/' . $karyawan->username)); ?>
        <input type="hidden" name="usr" class="form-control" value="<?= $karyawan->username ?>">
        <div class="row">
            <div class="col mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control" id="username" placeholder="Masukan Username" name="username" value="<?= $karyawan->username ?>" required>
            </div>
            <div class="col mb-3">
                <label for="jabatan1" class="form-label">Jabatan 1</label>
                <select name="jabatan1" class="form-select">
                    <option value="">-</option>
                    <?php foreach ($jabatan as $row) : ?>
                        <?php if ($karyawan->jabatan1 == $row['nama_jabatan']) { ?>
                            <option value="<?= $row['nama_jabatan']; ?>" selected><?= $row['nama_jabatan']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['nama_jabatan']; ?>"><?= $row['nama_jabatan']; ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>
            <div class="col mb-3">
                <label for="jabatan2" class="form-label">Jabatan 2</label>
                <select name="jabatan2" class="form-select">
                    <option value="">-</option>
                    <?php foreach ($jabatan as $row) : ?>
                        <?php if ($karyawan->jabatan2 == $row['nama_jabatan']) { ?>
                            <option value="<?= $row['nama_jabatan']; ?>" selected><?= $row['nama_jabatan']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['nama_jabatan']; ?>"><?= $row['nama_jabatan']; ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>
            <div class="col mb-3">
                <label for="jabatan3" class="form-label">Jabatan 3</label>
                <select name="jabatan3" class="form-select">
                    <option value="">-</option>
                    <?php foreach ($jabatan as $row) : ?>
                        <?php if ($karyawan->jabatan3 == $row['nama_jabatan']) { ?>
                            <option value="<?= $row['nama_jabatan']; ?>" selected><?= $row['nama_jabatan']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['nama_jabatan']; ?>"><?= $row['nama_jabatan']; ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukan Nama Lengkap" name="nama_lengkap" value="<?= $karyawan->nama_lengkap ?>" required>
            </div>
            <div class="col mb-3">
                <label for="phone" class="form-label">Handphone</label>
                <input type="number" class="form-control" id="phone" placeholder="Masukan Nomor Handphone" name="phone" value="<?= $karyawan->phone ?>">
            </div>
        </div>
        <div>
            <button class="btn btn-secondary" type="button" id="back">Batal</button>
            <input type="submit" name="submit" value="Edit Data" class="btn btn-primary">
        </div>
        <?= form_close(); ?>
    </div>
</div>