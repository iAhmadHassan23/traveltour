<?php

namespace App\Http\Middleware;

use Closure;

class MinifyHtml
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        if ($response->headers->get('Content-Type') == 'text/html; charset=UTF-8') {
            $content = $response->getContent();
            $content = $this->minifyHtml($content); 
            $response->setContent($content);
        }

        return $response;
    }

    /**
     * Minify HTML content.
     *
     * @param  string  $content
     * @return string
     */
    protected function minifyHtml($content)
    {
        // Remove comments
        $content = preg_replace('/<!--.*?-->/', '', $content);

        // Remove extra whitespace
        $content = preg_replace('/\s+/', ' ', $content);

        // Remove whitespace from between HTML tags
        $content = preg_replace('/>\s+</', '><', $content);

        return $content;
    }
}
