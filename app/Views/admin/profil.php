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
        <?= form_open_multipart(base_url('/profil/simpan/' . $profil->username)); ?>
        <div class="col mb-3">
            <div class="row">
                <div class="col-6 container ratio ratio-1x1">
                    <?php
                    if (!empty($profil->foto)) {
                        echo '<img src="' . base_url("../admin/img/user/$profil->foto") . '" width="100%" class="rounded">';
                    } else {
                        echo '<img src="' . base_url("../admin/img/user/profil.png") . '" width="100%" class="rounded">';
                    } ?>
                </div>
                <div class="col-6 container">
                    <div class="row mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukan Nama Lengkap" name="nama_lengkap" value="<?= $profil->nama_lengkap ?>" required>
                    </div>
                    <div class="row mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="username" class="form-control" id="username" placeholder="Masukan Username" name="username" value="<?= $profil->username ?>">
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email" value="<?= $profil->email ?>">
                    </div>
                    <div class="row mb-3">
                        <label for="handphone" class="form-label">Handphone</label>
                        <input type="handphone" class="form-control" id="handphone" placeholder="Masukan No Hp" name="handphone" value="<?= $profil2->phone ?>">
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="form-label">Password Baru</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password">
                    </div>
                    <div class="row mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto" value="<?= $profil->foto ?>">
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