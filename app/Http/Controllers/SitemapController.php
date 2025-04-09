<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Blog;

class SitemapController extends Controller
{
    public function index(){
        return response()->view('sitemap.index')->header('Content-Type', 'text/xml');
    }

    public function pages(){
        return response()->view('sitemap.pages')->header('Content-Type', 'text/xml');
    }

    public function services(){
        $services = Page::active()->whereIn('type', ['service', 'sub service'])->indexing()->get();
        return response()->view('sitemap.services', compact('services'))->header('Content-Type', 'text/xml');
    }


    public function blog_posts(){
        $blogs = Blog::published()->indexing()->latest("created_at")->get();
        return response()->view('sitemap.blogs', compact('blogs'))->header('Content-Type', 'text/xml');
    }
}
