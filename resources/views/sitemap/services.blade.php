<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

    @forelse($services as $service)
        @php
            if(isset($service->service->slug)){
                $redirect = route('single.sub_service', ['service' => $service->service->slug, 'sub_service' => $service->sub_slug]);
            }else{
                $redirect = route('single.service', $service->slug);
            }
        @endphp
        <url>
            <loc>{{ $redirect }}</loc>
        </url>
    @empty
    @endforelse
</urlset>
