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
        <form action="/mitra/simpan" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col mb-3">
                    <label for="nama" class="form-label">Nama Mitra</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Mitra" name="nama" value="" required>
                </div>
                <div class="col mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo" value="" required>
                </div>
            </div>
            <div>
                <button class="btn btn-secondary" type="button" id="back">Batal</button>
                <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>