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
        <?= form_open_multipart(base_url('/tim/update/' . $tim->id)); ?>
        <input type="hidden" name="id" class="form-control" value="<?= $tim->id ?>">
        <div class="row">
            <div class="col mb-3">
                <label for="nama_tim" class="form-label">Nama Tim</label>
                <input type="text" class="form-control" id="nama_tim" placeholder="Masukan Nama Tim" name="nama_tim" value="<?= $tim->nama_tim ?>" required>
            </div>
        </div>
        <div>
            <button class="btn btn-secondary" type="button" id="back">Batal</button>
            <input type="submit" name="submit" value="Edit Data" class="btn btn-primary">
        </div>
        <?= form_close(); ?>
    </div>
</div>