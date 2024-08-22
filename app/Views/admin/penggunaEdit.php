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
        <?= form_open_multipart(base_url('/pengguna/update/' . $pengguna->username)); ?>
        <input type="hidden" name="usr" class="form-control" value="<?= $pengguna->username ?>">
        <div class="row">
            <div class="col mb-6">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukan Nama Lengkap" name="nama_lengkap" value="<?= $pengguna->nama_lengkap ?>" required>
            </div>
            <div class="col mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control" id="username" placeholder="Masukan Username" name="username" value="<?= $pengguna->username ?>">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email" value="<?= $pengguna->email ?>">
            </div>
            <div class="col mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" class="form-select">
                    <option value="">-</option>
                    <?php foreach ($role as $row) : ?>
                        <?php if ($pengguna->role == $row['role']) { ?>
                            <option value="<?= $row['role']; ?>" selected><?= $row['role']; ?></option>
                        <?php } else { ?>
                            <option value="<?= $row['role']; ?>"><?= $row['role']; ?></option>
                    <?php }
                    endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="password" class="form-label">Password Baru</label>
                <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password">
            </div>
            <div class="col mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" value="<?= $pengguna->foto ?>">
            </div>
        </div>
        <div>
            <button class="btn btn-secondary" type="button" id="back">Batal</button>
            <input type="submit" name="submit" value="Edit Data" class="btn btn-primary">
        </div>
        <?= form_close(); ?>
    </div>
</div>