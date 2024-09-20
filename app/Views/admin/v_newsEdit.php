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
        <?= form_open_multipart(base_url('/artikel/update/' . $news->post_id)); ?>
        <div class="mb-3">
            <label for="post_title" class="form-label">Judul</label>
            <input type="hidden" name="post_id" class="form-control" value="<?= $news->post_id ?>">
            <input type="text" class="form-control" id="post_title" placeholder="Masukan Judul" name="post_title" value="<?= $news->post_title ?>">
        </div>
        <div class="row">
            <div class="col-lg mb-3">
                <label for="post_status" class="form-label">Status</label>
                <select name="post_status" class="form-select">
                    <option value="Aktif" <?= ($news->post_status == 'Aktif' ? "selected" : ""); ?>>Aktif</option>
                    <option value="Tidak Aktif" <?= ($news->post_status == 'Tidak Aktif' ? "selected" : ""); ?>>Tidak Aktif</option>
                </select>
            </div>
            <div class="col-lg mb-3">
                <label for="post_type" class="form-label">Tipe</label>
                <select name="post_type" class="form-select">
                    <option value="article" <?= ($news->post_type == 'article' ? "selected" : ""); ?>>Artikel</option>
                    <option value="page" <?= ($news->post_type == 'page' ? "selected" : ""); ?>>Halaman</option>
                </select>
            </div>
            <div class="col-lg mb-3">
                <label for="author" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="author" placeholder="Author" name="author" value="<?= $news->author ?>" readonly>
            </div>
        </div>
        <?php
        if (!empty($news->post_thumbnail)) { ?>
            <div class="row mb-3">
                <div class="col-lg-3 mr-4" aria-rowspan="2">
                    <?php
                    echo '<img src="' . base_url("../home/assets/img/news/$news->post_thumbnail") . '" width="300">'; ?>
                </div>
                <div class="col-lg">
                <?php } ?>
                <div class="mb-3">
                    <label for="post_thumbnail" class="form-label">Thumbnail</label>
                    <input type="file" class="form-control" id="post_thumbnail" name="post_thumbnail" value="<?= $news->post_thumbnail ?>">
                </div>
                <div class="row">
                    <div class="col-lg">
                        <label for="post_link" class="form-label">Link Youtube</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="post_link" placeholder="Youtube.com/(masukan link youtube)" name="post_link">
                        </div>
                    </div>
                    <!-- <div class="col-lg">
                        <label for="post_tag" class="form-label">Kategori / Tag</label>
                        <select class="form-control selectpicker formselect" multiple>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                        </select>
                    </div> -->
                </div>
                <?php
                if (!empty($news->post_thumbnail)) { ?>
                </div>
            </div>
        <?php } ?>
        <div class="mb-3">
            <label for="post_content" class="form-label">Konten</label>
            <textarea class=" form-control" id="summernote" placeholder="Masukan Konten" name="post_content" rows="20"><?= $news->post_content ?></textarea>
        </div>
        <div>
            <button class="btn btn-secondary" type="button" id="back">Batal</button>
            <input type="submit" name="submit" value="Edit Data" class="btn btn-primary">
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
        'fontSizesIgnoreCheck': ['16'],

        callbacks: {
            onPaste: function(e) {
                var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');

                e.preventDefault();

                // Firefox fix
                setTimeout(function() {
                    document.execCommand('insertText', false, bufferText);
                }, 10);
            }
        }
    });
</script>