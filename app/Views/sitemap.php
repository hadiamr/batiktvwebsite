<?php
$datetime = new DateTime(date('Y-m-d H:i:s'));
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?= base_url() ?></loc>
    <lastmod><?= $datetime->format(DATE_ATOM); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.1</priority>
  </url>
  <?php foreach ($url as $item) { ?>
    <url>
      <loc><?= base_url($item['post_title_seo']) ?></loc>
      <lastmod><?= $datetime->format(DATE_ATOM); ?></lastmod>
      <changefreq>daily</changefreq>
      <priority>0.5</priority>
    </url>
  <?php } ?>
</urlset>