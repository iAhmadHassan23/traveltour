<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc>{{ route('single.segment', 'about') }}</loc>
    </url>
    <url>
        <loc>{{ route('single.segment', 'privacy-policy') }}</loc>
    </url>
    <url>
        <loc>{{ route('single.segment', 'terms-and-conditions') }}</loc>
    </url>
    <url>
        <loc>{{ route('contact.index') }}</loc>
    </url>
    <url>
        <loc>{{ route('single.segment', 'blogs') }}</loc>
    </url>
    <url>
        <loc>{{ url('/') }}</loc>
    </url>

</urlset>
