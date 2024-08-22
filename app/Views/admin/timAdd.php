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
        <form action="/tim/simpan" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col mb-3">
                    <label for="nama_tim" class="form-label">Nama Tim</label>
                    <input type="text" class="form-control" id="nama_tim" placeholder="Masukan Nama Tim" name="nama_tim" value="" required>
                </div>
            </div>
            <div>
                <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>