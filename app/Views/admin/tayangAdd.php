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
        <form action="/tayang/simpan" method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col-3">
                    <label for="hari" class="form-label">Hari</label>
                    <select name="hari" class="form-select" required>
                        <option>--Pilih Hari--</option>
                        <?php foreach ($hari as $row) : ?>
                            <option value="<?= $row['nama_hari']; ?>"><?= $row['nama_hari']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-3">
                    <label for="jam" class="form-label">Jam</label>
                    <input type="time" class="form-control" id="jam" name="jam" value="" required>
                </div>
                <div class="col-4">
                    <label for="program" class="form-label">Program</label>
                    <select name="program" class="form-select" required>
                        <option>--Pilih Program--</option>
                        <?php foreach ($program as $row) : ?>
                            <option value="<?= $row['nama_program']; ?>"><?= $row['nama_program']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-2">
                    <div class="mb-2">
                        <br>
                    </div>
                    <input type="checkbox" class="btn-check" id="btn-check-outlined" name="kategori" autocomplete="off" value="baru">
                    <label class="btn btn-outline-primary" for="btn-check-outlined"> &nbsp; &nbsp; &nbsp; Episode Baru &nbsp; &nbsp; &nbsp;</label>
                </div>
            </div>
            <div>
                <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>