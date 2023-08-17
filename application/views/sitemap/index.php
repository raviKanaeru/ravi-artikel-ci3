<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= base_url() ?></loc>
        <lastmod>2022-12-01T00:02:15+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc><?= base_url('flora/') ?></loc>
        <lastmod>2022-12-01T00:02:15+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc><?= base_url('fauna/') ?></loc>
        <lastmod>2022-12-01T00:02:15+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc><?= base_url('iklim/') ?></loc>
        <lastmod>2022-12-01T00:02:15+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc><?= base_url('umri/') ?></loc>
        <lastmod>2022-12-01T00:02:15+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc><?= base_url('aboutme/') ?></loc>
        <lastmod>2022-12-01T00:02:15+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <?php foreach ($post as $item) { ?>
        <url>
            <loc><?= base_url('artikel/page/' . $item['slug']) ?></loc>
            <lastmod><?= date('c', strtotime($item['update_artikel'])) ?></lastmod>
            <priority>1.00</priority>
        </url>
    <?php } ?>
</urlset>