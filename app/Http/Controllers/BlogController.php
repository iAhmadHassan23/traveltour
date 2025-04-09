<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog_detail($slug){
        $blog = Blog::where('slug', $slug)->published()->firstOrFail();
        $blog->media = json_decode($blog->media, true);
        return view('blog_detail', compact('blog'));
    }
}
