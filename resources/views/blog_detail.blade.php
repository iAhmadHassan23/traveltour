@extends('layouts.master')
@section('title', isset($blog->meta_title)?$blog->meta_title:'')
@section('meta_description', isset($blog->meta_description)?$blog->meta_description:'')

@section('indexing')
    @if($blog->index_status == 1)
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    @else
        <meta name="robots" content="noindex">
    @endif
@endsection
@isset($blog->media['full_image'])
    @section('ogimage' ,asset('media/'. $blog->media['full_image']))
@endisset
@section('style')
    <link rel="stylesheet" href="/assets/css/blog-detail-section.css">
@endsection

@section('mainContent')

    <section class="of-blog-detail-sec py-4 py-lg-5 bg-light">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="blog-detail-block bg-white">
                        <figure class="mb-4 text-center">
                            <img src="{{ asset('media/'.$blog->media['full_image']) }}" alt="{{ $blog->media['image_alt'] }}" class="img-fluid rounded">
                        </figure>
                        <div class="blog-detail-content">
                            <h1>{{ $blog->title }}</h1>
                            {!! $blog->blog_body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection
