<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
    </div>
    <div class="card-body">
        <!--Isi -->
        <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
            <div class="alert alert-success">
                <?php echo session()->getFlashdata('berhasil'); ?>
            </div>
        <?php } ?>
        <?= form_open_multipart(base_url('/artikel/simpan')); ?>
        <div class="mb-3">
            <label for="post_title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="post_title" placeholder="Masukan Judul" name="post_title" value="" required>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="post_status" class="form-label">Status</label>
                <select name="post_status" class="form-select">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
            </div>
            <div class="col mb-3">
                <label for="post_type" class="form-label">Tipe</label>
                <select name="post_type" class="form-select">
                    <option value="article">Artikel</option>
                    <option value="page">Halaman</option>
                </select>
            </div>
            <div class="col mb-3">
                <label for="author" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="author" placeholder="Author" name="author" value="<?php echo session()->get('akun_nama_lengkap') ?>" readonly>
            </div>
        </div>
        <div class="mb-3">
            <label for="post_thumbnail" class="form-label">Thumbnail</label>
            <input type="file" class="form-control" id="post_thumbnail" name="post_thumbnail">
        </div>
        <label for="post_link" class="form-label">Link Youtube</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="post_link">https://youtube.com/</span>
            <input type="text" class="form-control" id="post_link" placeholder="Masukan Link Youtube" name="post_link">
        </div>
        <div class="mb-3">
            <label for="post_content" class="form-label">Konten</label>
            <textarea class=" form-control" id="summernote" placeholder="Masukan Konten" name="post_content" rows="20"><?php echo (isset($post_content)) ? $post_content : '' ?></textarea>
        </div>
        <div>
            <button class="btn btn-secondary" type="button" id="back">Batal</button>
            <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary">
        </div>
        <?= form_close(); ?>
    </div>
</div>
<script>
    $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 200,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
            ['float', ['floatLeft', 'floatRight', 'floatNone']],
            ['remove', ['removeMedia']],
            ['insert', ['link', 'unlink', 'picture', 'video']],
            ['view', ['codeview', 'help']]
        ],
        maximumImageFileSize: 524288,
        'fontNames': ['Montserrat'],
        'fontNamesIgnoreCheck': ['Montserrat'],
        'fontSizes': ['16'],
        'fontSizesIgnoreCheck': ['16']
    });
</script>