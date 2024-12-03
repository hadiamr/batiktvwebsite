<?php
$datetime = new DateTime(date('Y-m-d H:i:s'));
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">>
	<url>
		<loc><?= base_url() ?></loc>
		<lastmod><?= $datetime->format(DATE_ATOM); ?></lastmod>
		<priority>1.0</priority>
	</url>
	<?php foreach ($url as $item) { ?>
		<url>
			<loc><?= base_url('/news/' . $item['post_title_seo']) ?></loc>
			<lastmod><?= $datetime->format(DATE_ATOM); ?></lastmod>
			<priority>0.8</priority>
		</url>
	<?php } ?>
</urlset>