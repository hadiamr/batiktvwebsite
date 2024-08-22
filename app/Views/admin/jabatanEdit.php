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
        <?= form_open_multipart(base_url('/jabatan/update/' . $jabatan->id)); ?>
        <div class="mb-3">
            <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
            <input type="hidden" name="id" value="<?= $jabatan->id ?>">
            <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="Masukan Jabatan" value="<?= $jabatan->nama_jabatan ?>">
        </div>
        <div>
            <button class="btn btn-secondary" type="button" id="back">Batal</button>
            <input type="submit" name="submit" value="Edit Data" class="btn btn-primary">
        </div>
        <?= form_close(); ?>
    </div>
</div>
</script>