<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{ route('sitemap.pages') }}</loc>
    </sitemap>
    <sitemap>
        <loc>{{ route('sitemap.services') }}</loc>
    </sitemap>
    <sitemap>
        <loc>{{ route('sitemap.blogs') }}</loc>
    </sitemap>
</sitemapindex>