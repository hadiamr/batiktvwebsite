<div class="col-1"></div>
<div class="col-lg-7">
    <div class="ratio ratio-16x9 position-relative rounded overflow-hidden mb-3">
        <?php
        if (!empty($news->post_link)) { ?>
            <iframe src="https://www.youtube.com/embed/<?php echo $news->post_link; ?>?autoplay=1&autohide=1&controls=1&disablekb=1&modestbranding=1&fs=1&rel=1&showinfo=0&enablejsapi=1&origin=https%3A%2F%2Fwww.batiktv.xyz&widgetid=1" title="<?php echo $news->post_title; ?>" class="rounded" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <?php } elseif (!empty($news->post_thumbnail)) {
            echo '<img src="' . base_url("../home/assets/img/news/$news->post_thumbnail") . '" width="100%"  class="rounded">';
        } else {
            echo '<img src="' . base_url("../home/assets/img/btv.png") . '" width="100%"  class="rounded">';
        }
        ?>
    </div>
    <?php
    if ($news->post_type == 'article') { ?>
        <div class="tanggal mb-2">
            <i class="fas fa-user-pen"></i> <?php echo $news->author; ?> &nbsp; | &nbsp;
            <i class="fas fa-clock"></i> <?= $convertDate = date("d/m/Y - H:i", strtotime($news->post_time)); ?> WIB
        </div>
    <?php } ?>
    <div class="h4">
        <?php echo $news->post_title; ?>
    </div>
    <div class="divider-full bg-campur rounded mb-3" style="height: 0.25rem; max-width: 8rem;"></div>
    <div class="row">
        <div class="artikel tj">
            <?php echo $news->post_content; ?>
        </div>
    </div>
    <hr>
    <p class="artikel">Bagikan artikel:
    <div class="sharethis-inline-share-buttons"></div>
    </p>
    <img class="img-fluid rounded mt-3" src="../../../home/assets/img/banner4.png">
    <amp-ad width="100vw" height="320"
        type="adsense"
        data-ad-client="ca-pub-6947664556061935"
        data-ad-slot="5874080803"
        data-auto-format="rspv"
        data-full-width="">
        <div overflow=""></div>
    </amp-ad>
</div>
<div class="col-lg-4">
    <div class="bg-light rounded p-4 pt-0 mb-4">
        <div class="h5 pt-4">Berita Terkini
            <hr>
        </div>
        <div class="row g-4">
            <?php foreach ($news2 as $row) : ?>
                <div class="col-12">
                    <div class="row g-4 align-items-center">
                        <div class="col-5">
                            <div class="ratio ratio-16x9 position-relative rounded overflow-hidden">
                                <?php
                                if (!empty($row['post_thumbnail'])) {
                                    echo '<img src="' . base_url("../home/assets/img/news/$row[post_thumbnail]") . '" width="100%">';
                                } else {
                                    echo '<img src="' . base_url("../home/assets/img/btv.png") . '" width="100%">';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="features-content d-flex flex-column">
                                <a href="/news/<?= $row['post_title_seo']; ?>" style="text-decoration:none" class="h6">
                                    <?= substr($row['post_title'], 0, 50) ?>...
                                </a>
                                <small><i class="fas fa-clock"></i> <?= $convertDate = date("d/m/Y", strtotime($row['post_time'])); ?></i> </small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div id="table" class="bg-secondary rounded p-4 mb-4">
        <table class="table text-center table-bordered" id="dataTable" cellspacing="0">
            <div class="h5 mb-2 text-white text-center">Jadwal Tayang <?= $hari; ?><div>
                    <thead>
                        <tr class="text-white bg-campur h6">
                            <th>Jam</th>
                            <th>Program</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tayang as $row) : ?>
                            <tr class="text-white">
                                <td><?= $row['jam']; ?></td>
                                <td><?= $row['program']; ?></td>
                            </tr>
                    </tbody>
                <?php
                        endforeach; ?>
        </table>
    </div>
    <!-- <img class="img-fluid rounded" src="../../../home/assets/img/banner3.png"> -->
    <amp-ad width="100vw" height="320"
        type="adsense"
        data-ad-client="ca-pub-6947664556061935"
        data-ad-slot="7935405423"
        data-auto-format="rspv"
        data-full-width="">
        <div overflow=""></div>
    </amp-ad>
</div>