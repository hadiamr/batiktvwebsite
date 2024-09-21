<!-- Footer-->
<footer class="footer2 text-center bg-campur mt-4">
    <div class="divider-full bg-birunom mb-5"></div>
    <div class="container">
        <div class="row">
            <!-- Footer Locasi-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Lokasi</h4>
                <p class="lead mb-0">
                    <?= $setelan->alamat ?><br>
                    Jam Operasional <?= $setelan->operasional ?>
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Media Sosial</h4>
                <a target="_blank" class="btn btn-outline-light btn-social mx-1" aria-label="Facebook" href="<?= $setelan->facebook ?>"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a target="_blank" class="btn btn-outline-light btn-social mx-1" aria-label="Twitter" href="<?= $setelan->twitter ?>"><i class="fab fa-fw fa-twitter"></i></a>
                <a target="_blank" class="btn btn-outline-light btn-social mx-1" aria-label="Instagram" href="<?= $setelan->instagram ?>"><i class="fab fa-fw fa-instagram"></i></a>
                <a target="_blank" class="btn btn-outline-light btn-social mx-1" aria-label="Youtube" href="<?= $setelan->youtube ?>"><i class="fab fa-fw fa-youtube"></i></a>
            </div>
            <!-- Footer Jangkauan -->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Jangkauan Siaran</h4>
                <p class="lead mb-0">
                    <?= $setelan->jangkauan ?>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; <a href="https://www.batiktv.id/" style="text-decoration:none"><b>Batik TV 2024</b></a></small></div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="<?php echo base_url('home') ?>/js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=66c6e11cac99040019f157e8&product=inline-share-buttons&source=platform" async="async"></script>

</body>

</html>