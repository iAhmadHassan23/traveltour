@extends('layouts.master')
@section('title', isset($pageData->meta_title)?$pageData->meta_title:'')
@section('meta_description', isset($pageData->meta_description)?$pageData->meta_description:'')

@section('indexing')
    @if($pageData->index_status == 1)
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    @else
        <meta name="robots" content="noindex">
    @endif
@endsection 
@isset($pageData->meta_image)
@section('ogimage' ,asset('media/'. $pageData->meta_image))
@endisset
@section('style')
@endsection

@section('mainContent')
    @if(count($pageData->sections) > 0)
        @foreach($pageData->sections as $key => $section)
            @php
                $section_content = json_decode($section->content, true);
            @endphp
            @includeIf('components.'. $section->section,
               [
                   'section_content' => $section_content
               ])
        @endforeach
    @endif
@endsection



@section('js')
@endsection
