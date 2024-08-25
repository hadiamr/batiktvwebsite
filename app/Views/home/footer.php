</div>
</div>
<!-- Footer-->
<footer class="footer text-center bg-campur mt-4">
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
                <a target="_blank" class="btn btn-outline-light btn-social mx-1" href="<?= $setelan->facebook ?>"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a target="_blank" class="btn btn-outline-light btn-social mx-1" href="<?= $setelan->twitter ?>"><i class="fab fa-fw fa-twitter"></i></a>
                <a target="_blank" class="btn btn-outline-light btn-social mx-1" href="<?= $setelan->instagram ?>"><i class="fab fa-fw fa-instagram"></i></a>
                <a target="_blank" class="btn btn-outline-light btn-social mx-1" href="<?= $setelan->youtube ?>"><i class="fab fa-fw fa-youtube"></i></a>
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
    <div class="container"><small>Copyright &copy; <a href="www.batiktv.id" style="text-decoration:none"><b>Batik TV 2024</b></a></small></div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="<?php echo base_url('home') ?>/js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=66c6e11cac99040019f157e8&product=inline-share-buttons&source=platform" async="async"></script>
<script>
    $('.carousel .carousel-item').each(function() {
        var minPerSlide = 4;
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
        }
    });
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6947664556061935"
    crossorigin="anonymous"></script>
<ins class="adsbygoogle"
    style="display:block"
    data-ad-format="fluid"
    data-ad-layout-key="-53+cd-l-7c+os"
    data-ad-client="ca-pub-6947664556061935"
    data-ad-slot="3301191692"></ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<amp-ad width="100vw" height="320"
    type="adsense"
    data-ad-client="ca-pub-6947664556061935"
    data-ad-slot="7935405423"
    data-auto-format="rspv"
    data-full-width="">
    <div overflow=""></div>
</amp-ad>
</body>

</html>