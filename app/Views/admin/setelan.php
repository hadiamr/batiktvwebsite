<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Data Setelan</h6>
    </div>
    <div class="card-body">
        <!--Isi -->
        <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
            <div class="alert alert-success">
                <?php echo session()->getFlashdata('berhasil'); ?>
            </div>
        <?php } ?>
        <?= form_open_multipart(base_url('/setelan/simpan')); ?>
        <div class="row mb-3">
            <div class="col-6">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Masukan Judul" name="judul" value="<?= $setelan->judul ?>" required>
            </div>
            <div class="col-6">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" value="<?= $setelan->alamat ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" placeholder="Masukan Deskripsi" name="deskripsi" rows="2" required><?= $setelan->deskripsi ?></textarea>
            </div>
            <div class="col-3">
                <label for="operasional" class="form-label">Jam Operasional</label>
                <textarea class="form-control" placeholder="Masukan Jam Operasional" name="operasional" rows="2" required><?= $setelan->operasional ?></textarea>
            </div>
            <div class="col-3">
                <label for="jangkauan" class="form-label">Jangkauan</label>
                <textarea class="form-control" placeholder="Jangkauan Siaran" name="jangkauan" rows="2" required><?= $setelan->jangkauan ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="tentang" class="form-label">Tentang</label>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-6">
                <textarea class="form-control" placeholder="Paragraf 1" name="tentang1" rows="4"><?= $setelan->tentang1 ?></textarea>
            </div>
            <div class="col-6">
                <textarea class="form-control" placeholder="Paragraf 2" name="tentang2" rows="4"><?= $setelan->tentang2 ?></textarea>
            </div>
        </div>
        <div class="row bg-light m-0 p-4 mb-3 rounded">
            <div class="col-3">
                <i class="fab fa-fw fa-facebook"></i><label for="facebook" class="form-label">Facebook</label>
                <input type="text" class="form-control" id="facebook" placeholder="Link Facebook" name="facebook" value="<?= $setelan->facebook ?>" required>
            </div>
            <div class="col-3">
                <i class="fab fa-fw fa-twitter"></i><label for="twitter" class="form-label">Twitter</label>
                <input type="text" class="form-control" id="twitter" placeholder="Link Twitter" name="twitter" value="<?= $setelan->twitter ?>" required>
            </div>
            <div class="col-3">
                <i class="fab fa-fw fa-instagram"></i><label for="instagram" class="form-label">Instagram</label>
                <input type="text" class="form-control" id="instagram" placeholder="Link Instagram" name="instagram" value="<?= $setelan->instagram ?>" required>
            </div>
            <div class="col-3">
                <i class="fab fa-fw fa-youtube"></i><label for="youtube" class="form-label">Youtube</label>
                <input type="text" class="form-control" id="youtube" placeholder="Link Youtube" name="youtube" value="<?= $setelan->youtube ?>" required>
            </div>
        </div>
        <div>
            <button class="btn btn-secondary" type="button" id="back">Batal</button>
            <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary">
        </div>
        <?= form_close(); ?>
    </div>
</div>