<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Tambah Data</h6>
    </div>
    <div class="card-body">
        <!--Isi -->
        <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
            <div class="alert alert-success">
                <?php echo session()->getFlashdata('berhasil'); ?>
            </div>
        <?php } ?>
        <?= form_open_multipart(base_url('/produksi/simpanJadwal')); ?>
        <div class="row">
            <div class="col-lg mb-3">
                <label for="waktu" class="form-label">Waktu</label>
                <input type="datetime-local" class="form-control" id="waktu" name="waktu" required>
            </div>
            <div class="col-lg mb-3">
                <label for="driver" class="form-label">Driver</label>
                <select name="driver" class="form-select">
                    <option value="">--Pilih Driver--</option>
                    <?php foreach ($driver as $row) : ?>
                        <option value="<?= $row['username']; ?>"><?= $row['username']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-3">
                <label for="program_id" class="form-label">Program</label>
                <select name="program_id" class="form-select">
                    <option value="">--Pilih Program--</option>
                    <?php foreach ($program as $row) : ?>
                        <option value="<?= $row['id']; ?>"><?= $row['nama_program']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-lg mb-3">
                <label for="episode" class="form-label">Episode</label>
                <input type="text" class="form-control" id="episode" placeholder="Episode" name="episode" value="" required>
            </div>
            <div class="col-lg mb-3">
                <label for="tempat" class="form-label">Tempat Produksi</label>
                <input type="text" class="form-control" id="tempat" placeholder="Tempat Produksi" name="tempat" value="" required>
            </div>
        </div>
        <div>
            <button class="btn btn-secondary" type="button" id="back">Batal</button>
            <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary">
        </div>
        <?= form_close(); ?>
    </div>
</div>